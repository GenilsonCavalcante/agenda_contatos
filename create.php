<?php
include_once("templates/header.php");
?>
<main class="main">

   <h1 class="main__title">Criar Contato</h1>

   <form action="" class="create-form">
      <section class="create-form__section">
         <label for="name">Nome do Contato:</label>
         <input type="text" name="name" id="name" placeholder="Digite o nome" required>
      </section>
      <section class="create-form__section">
         <label for="phone">Telefone do Contato:</label>
         <input type="text" name="phone" id="phone" placeholder="Digite o nome" required>
      </section>
      <section class="create-form__section">
         <label for="email">Email:</label>
         <input type="email" name="email" id="email" placeholder="Digite o email">
      </section>
      <section class="create-form__section">
         <label for="observations">Observações:</label>
         <textarea name="observations" id="observations" rows="3" placeholder="Insira as observações"></textarea>
      </section>
      <button type="submit" class="create-form__button">Cadastrar</button>
   </form>

</main>
<?php
include_once("templates/footer.php");
?>