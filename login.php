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
         <input type="hidden" name="type" value="login">
         <div class="main__form-login">
            <img class="main__form-img" src="img/logo.svg" alt="Logo de uma agenda">
            <h2 class="main__form-h2">Login</h2>
         </div>

         <div class="main__form-email">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
         </div>

         <div class="main__form-password">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite a senha" required>
         </div>

         <div class="main__form-button">
            <input type="submit" value="Logar">
         </div>

         <div class="main__form-create-account">
            <p>Não possui conta? <a href="create_account.php">Criar conta</a></p>
         </div>
      </form>
   </main>
</body>

</html>