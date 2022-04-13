<?php
include_once("templates/header.php");
?>
<main class="main">

   <h1 class="main__title">Criar Contato</h1>

   <form action="" class="create-form">
      <section class="create-form__section">
         <label for="name" class="create-form__label">Nome do Contato:</label>
         <input type="text" class="create-form__input" name="name" id="name" placeholder="Digite o nome" required>
      </section>
      <section class="create-form__section">
         <label for="phone" class="create-form__label">Telefone:</label>
         <input type="text" class="create-form__input" name="phone" id="phone" placeholder="Digite o nome" required>
      </section>
      <section class="create-form__section">
         <label for="email" class="create-form__label">Email:</label>
         <input type="text" class="create-form__input" name="email" id="email" placeholder="Digite o email">
      </section>
      <section class="create-form__section">
         <label for="observations" class="create-form__label">Observações:</label>
         <textarea name="observations" class="create-form__textarea" id="observations" rows="3" placeholder="Insira as observações"></textarea>
      </section>
      <button type="submit" class="create-form__button">Cadastrar</button>
   </form>

</main>
<?php
include_once("templates/footer.php");
?>