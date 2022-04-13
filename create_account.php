<?php
require_once("url.php");
require_once("database.php");
require_once("models/Message.php");

$message = new Message($BASE_URL);

$flassMessage = $message->getMessage();

if (!empty($flassMessage["msg"])) {
   // LIMPAR A MENSAGEM
   $message->clearMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Agenda</title>
   <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/login.css">
</head>

<body>
   <header class="header">
      <h1 class="header__title">Agenda</h1>
   </header>
   <!-- MESSAGE -->
   <?php if (!empty($flassMessage["msg"])) : ?>
      <div class="msg-container">
         <p class="msg <?php echo $flassMessage["type"] ?>">
            <?php echo $flassMessage["msg"]; ?>
         </p>
      </div>
   <?php endif; ?>

   <main class="main">
      <form class="main__form" action="user_process.php" method="POST">
         <input type="hidden" name="type" value="create_account">
         <div class="main__form-login">
            <img class="main__form-img" src="img/logo.svg" alt="Logo de uma agenda">
            <h2 class="main__form-h2">Criar conta</h2>
         </div>

         <div class="main__form-nome">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome" required>
         </div>

         <div class="main__form-sobrenome">
            <label for="surname">Sobrenome</label>
            <input type="text" name="surname" id="surname" placeholder="Digite o seu sobrenome">
         </div>

         <div class="main__form-email">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Digite o seu email" required>
         </div>

         <div class="main__form-password">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" required>
         </div>

         <div class="main__form-confirm-password">
            <label for="confirm_password">Confirmar senha</label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirme a senha" required>
         </div>

         <div class="main__form-button">
            <input type="submit" value="Criar conta">
         </div>

         <div class="main__form-create-account">
            <p>Já possui conta? <a href="login.php">Login</a></p>
         </div>
      </form>
   </main>
</body>

</html>