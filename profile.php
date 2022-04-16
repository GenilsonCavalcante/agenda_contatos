<?php
include_once("templates/header.php");
?>
<!-- DEPENDÊNCIA DO ARQUIVO login.css -->
<main class="main">
   <h2 class="main__title">Perfil</h2>

   <form class="main__form" action="user_process.php" method="POST">
      <input type="hidden" name="type" value="update">

      <div class="main__form-nome">
         <label for="name">Nome</label>
         <input type="text" name="name" id="name" placeholder="Digite seu nome" value="<?php echo $userData->name; ?>" required>
      </div>

      <div class="main__form-sobrenome">
         <label for="surname">Sobrenome</label>
         <input type="text" name="surname" id="surname" value="<?php echo $userData->surname; ?>" placeholder="Digite o seu sobrenome">
      </div>

      <div class="main__form-email">
         <label for="email">Email</label>
         <input type="email" name="email" id="email" placeholder="Digite o seu email" value="<?php echo $userData->email; ?>" readonly>
      </div>
      <input class="main-form__button" type="submit" value="Atualizar Dados">
   </form>

   <div class="main__changepassword">
      <h3 class="main__changepassword-title">Alterar senha</h3>
      <form class="main__form-changepassword" action="user_process.php" method="POST">
         <input type="hidden" name="type" value="changepassword">

         <div class="main__changepassword-newpassword">
            <label for="newpassword">Nova senha</label>
            <input type="password" name="newpassword" id="newpassword" placeholder="Definir nova senha">
         </div>
         <div class="main__changepassword-confirm-newpassword">
            <label for="confirm-newpassword">Confirmar nova senha</label>
            <input type="password" name="confirm-newpassword" id="confirm-newpassword" placeholder="Confirmação da nova senha">
         </div>
         <div class="main__changepassword-currentpassword">
            <label for="currentpassword">Senha atual</label>
            <input type="password" name="currentpassword" id="currentpassword" placeholder="Sua senha atual">
         </div>
         <input class="main-form__button" type="submit" value="Alterar Senha">
      </form>
   </div>
</main>
</body>

</html>