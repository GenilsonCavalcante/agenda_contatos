<?php
   require_once("url.php");
   require_once("database.php");
   require_once("models/Message.php");
   require_once("dao/UserDAO.php");

   $message = new Message($BASE_URL);

   $flassMessage = $message->getMessage();

   if (!empty($flassMessage["msg"])) {
      // LIMPAR A MENSAGEM
      $message->clearMessage();
   }

   $userDao = new UserDAO($conn, $BASE_URL);

   $userData = $userDao->verifyToken(false);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Agenda</title>

   <!-- CSS -->
   <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/create.css">
</head>

<body>
   <header class="header">
      <nav class="header__nav">
         <a href="<?php echo $BASE_URL; ?>/index.php" class="header__link">
            <img src="img/logo.svg" class="header__logo" alt="Logo agenda de contatos">
         </a>
         <div class="header__link-actions">
            <a href="<?php echo $BASE_URL; ?>/index.php" class="header__link">Agenda</a>
            <a href="<?php echo $BASE_URL; ?>/create.php" class="header__link">Adicionar Contato</a>
         </div>
         <!-- CAMPO USUÁRIO -->
         <div class="header__user">
            <a href="<?php echo $BASE_URL; ?>/profile.php"><?php echo $userData->name; ?></a>
            <a href="<?php echo $BASE_URL; ?>/logout.php">Sair</a>
         </div>
      </nav>
   </header>
   <?php if (!empty($flassMessage["msg"])) : ?>
      <div class="msg-container">
         <p class="msg <?php echo $flassMessage["type"] ?>">
            <?php echo $flassMessage["msg"]; ?>
         </p>
      </div>
   <?php endif; ?>