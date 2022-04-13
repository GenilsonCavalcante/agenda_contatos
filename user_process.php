<?php

   require_once("url.php");
   require_once("database.php");
   require_once("models/User.php");
   require_once("models/Message.php");
   require_once("dao/UserDAO.php");

   $message = new Message($BASE_URL);
   $userDao = new UserDAO($conn, $BASE_URL);

   // RESGATA O TIPO DO FORMULÁRIO
   $type = filter_input(INPUT_POST, "type");

   // VERIFICAÇÃO DO TIPO DE FORMULÁRIO
   if ($type === "create_account") {

      $name = filter_input(INPUT_POST, "name");
      $surname = filter_input(INPUT_POST, "surname");
      $email = filter_input(INPUT_POST, "email");
      $password = filter_input(INPUT_POST, "password");
      $confirm_password = filter_input(INPUT_POST, "confirm_password");
      
      // VERIFICAÇÃO MÍNIMA DE DADOS INSERIDOS
      if ($name && $email && $password) {
         
         // VERIFICA SE AS SENHAS SÃO IGUAIS
         if ($password === $confirm_password) {
            
            // VERIFICA SE O EMAIL JÁ EXISTE NO BD
            if ($userDao->findByEmail($email) === false) {
               
               $user = new User();

               // CRIAÇÃO DO TOKEN E SENHA
               $userToken = $user->generateToken();
               $finalPassword = $user->generatePassword($password);


               $user->name = $name;
               $user->surname = $surname;
               $user->email = $email;
               $user->password = $finalPassword;
               $user->token = $userToken;

               $auth = true;

               $userDao->create($user, $auth);

            } else {

               // ENVIAR MENSAGEM DE ERRO, USUÁRIO JÁ EXISTE
               $message->setMessage("Usuário já cadastrado, tente outro email.", "error", "back");

            }
         } else {

            // ENVIAR MENSAGEM DE ERRO, AS SENHAS NÃO SÃO IGUAIS
            echo "as senhas não são iguais";

         }
      } else {

         // ENVIAR MENSAGEM DE ERRO, DADOS FALTANTES
         echo "dados faltantes";
      }

   } else if ($type === "login") {

      $email = filter_input(INPUT_POST, "email");
      $password = filter_input(INPUT_POST, "password");

      if($userDao->authenticateUser($email, $password)) {
         
         $message->setMessage("Seja bem-vindo!", "success", "/index.php");

      // REDIRECIONA USUÁRIO, CASO NÃO CONSIGA AUTENTICAR
      } else {

         $message->setMessage("Usuário e/ou senha incorreto(s).", "error", "back");

      }

   } else {

      // MSG ERROR
      $message->setMessage("Informações inválidas!", "error", "/index.php");
      
   }