<?php
include_once("templates/header.php");
?>
<main id="main">
   <?php
   include_once("templates/back_button.php");
   ?>

   <h1 class="main__title">Criar Contato</h1>

   <form action="<?php echo $BASE_URL; ?>/index.php" class="create-form" id="create-contact-form" method="POST">
      <section class="create-form__section">
         <label for="name" class="create-form__label">Nome do Contato:</label>
         <input type="text" class="create-form__input" name="name" id="name" placeholder="Digite o nome" required maxlength="30">
      </section>
      <section class="create-form__section">
         <label for="phone" class="create-form__label">Telefone:</label>
         <input type="text" class="create-form__input" name="phone" id="phone" placeholder="Digite o telefone" required maxlength="35">
      </section>
      <section class="create-form__section">
         <label for="email" class="create-form__label">Email:</label>
         <input type="text" class="create-form__input" name="email" id="email" placeholder="Digite o email">
      </section>
      <section class="create-form__section">
         <label for="observations" class="create-form__label">Observações:</label>
         <textarea name="observations" class="create-form__textarea" id="observations" rows="3" placeholder="Insira as observações"></textarea>
      </section>
      <div class="create-form__div-button">
         <button type="submit" class="create-form__button" id="create_contact_button" onclick="saveContact()">Cadastrar</button>
      </div>
   </form>

</main>

<script src="js/crud_localstorage.js"></script>

</body>

</html>