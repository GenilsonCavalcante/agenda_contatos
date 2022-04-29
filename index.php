<?php
   include_once("templates/header.php");
?>

<main class="main">

   <h1 class="main__title">Minha Agenda</h1>

   <table class="table-contacts" id="table-contacts">
      <thead class="table-contacts__thead">
         <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">
               <!-- search -->
               <form action="" class="table-contacts__search-form">
                  <input type="search" name="search" id="search" class="table-contacts__search-input" placeholder="Pesquisar">
                  <label for="search">
                     <img src="img/search.svg" alt="Icone para pesquisar">
                  </label>
               </form>
            </th>
         </tr>
      </thead>
      <tbody class="table-contacts__tbody">
         <!-- LISTA DE CONTATOS -->
      </tbody>
   </table>
</main>
<script src="js/list_contacts.js"></script>
<?php
include_once("templates/footer.php");
?>