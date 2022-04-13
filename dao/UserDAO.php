<?php

   require_once("models/User.php");
   require_once("models/Message.php");

   class UserDAO implements UserDAOInterface {

      private $conn;
      private $url;

      public function __construct(PDO $conn, $url) {
         $this->conn = $conn;
         $this->url = $url;
         $this->message = new Message($url);
      }

      public function buildUser($data) {

         $user = new User();

         $user->id = $data["id"];
         $user->name = $data["name"];
         $user->surname = $data["surname"];
         $user->email = $data["email"];
         $user->password = $data["password"];

         return $user;

      }

      public function setTokenToSession($token, $redirect = true) {

         // SALVAR TOKEN NA SESSION
         $_SESSION["token"] = $token;

         if ($redirect) {
            
            // REDIRECIONA PARA O PERFIL DO USUÁRIO
            $this->message->setMessage("Seja bem-vindo!", "success", "/index.php");

         }

      }

      public function create(User $user, $authUser = false) {

         $stmt = $this->conn->prepare("INSERT INTO users(name, surname, email, password, token) VALUES (:name, :surname, :email, :password, :token)");

         $stmt->bindParam(":name", $user->name);
         $stmt->bindParam(":surname", $user->surname);
         $stmt->bindParam(":email", $user->email);
         $stmt->bindParam(":password", $user->password);
         $stmt->bindParam(":token", $user->token);

         $stmt->execute();

         // AUTENTICAR USUÁRIO, CASO O AUTH SEJA TRUE
         if($authUser) {
            $this->setTokenToSession($user->token);
         }

      }

      public function update(User $user, $redirect = true) {

         $stmt = $this->conn->prepare("UPDATE users SET
            name = :name,
            surname = :surname,
            email = :email,
            token = :token
            WHERE id = :id
         ");

         $stmt->bindParam(":name", $user->name);
         $stmt->bindParam(":surname", $user->surname);
         $stmt->bindParam(":email", $user->email);
         $stmt->bindParam(":token", $user->token);
         $stmt->bindParam(":id", $user->id);

         $stmt->execute();

         if ($redirect) {
            
            // REDIRECIONA PARA O PERFIL DO USUÁRIO
            $this->message->setMessage("Dados atualizados com sucesso!", "success", "/index.php");

         }

      }

      public function findByEmail($email) {

         if($email != "") {

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            if ($stmt->rowCount() > 0) {
               
               $data = $stmt->fetch();
               $user = $this->buildUser($data);

               return $user;

            } else {
               return false;
            }

         } else {
            return false;
         }

      }

      public function verifyToken($protected = false) {

         if (!empty($_SESSION["token"])) {
            
            // PEGA O TOKEN DA SESSION
            $token = $_SESSION["token"];

            $user = $this->findByToken($token);

            if($user) {

               return $user;

            } else if ($protected) {

               // REDIRECIONA USUÁRIO NÃO AUTENTICADO
               $this->message->setMessage("Faça a autenticação para acessar a página!", "error", "/login.php");

            }

         } else if ($protected) {

            $this->message->setMessage("Faça a autenticação para acessar a página!", "error", "/login.php");
         
         } else {

            $this->message->setMessage("Faça a autenticação para acessar a página!", "error", "/login.php");

         }

      }

      public function findByToken($token) {

         if ($token != "") {
            
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE token = :token");

            $stmt->bindParam(":token", $token);

            $stmt->execute();

            if ($stmt->rowCount() > 0) {
               
               $data = $stmt->fetch();
               $user = $this->buildUser($data);

               return $user;

            } else {
               return false;
            }

         } else {
            return false;
         }

      }

      public function authenticateUser($email, $password) {

         $user = $this->findByEmail($email);

         if ($user) {

            // VERIFICA SE AS SENHAS SÃO IGUAIS
            if(password_verify($password, $user->password)) {

               // GERAR UM TOKEN E INSERIR NA SESSION
               $token = $user->generateToken();

               $this->setTokenToSession($token, false);

               // ATUALIZAR TOKEN NO USUÁRIO
               $user->token = $token;

               $this->update($user, false);

               return true;

            } else {
               return false;
            }
         } else {
            return false;
         }

      }

      public function destroyToken() {

         // REMOVE TOKEN DA SESSION
         $_SESSION["token"] = "";

         // REDIRECIONA PARA PÁGINA DE LOGIN COM MENSAGEM DE SUCESSO
         $this->message->setMessage("Você fez o logout com sucesso!", "success", "/login.php");

      }
   }