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
         <!-- <tr>
            <td scope="row">1</td>
            <td scope="row">Genilson</td>
            <td scope="row">(99) 9999-9999</td>
            <td scope="row" class="table-contacts__icons">
               
               <a href="#">
                  <img src="img/eye-regular.svg" alt="Icone para visualizar dados completos">
               </a>
               <a href="#">
                  <img src="img/pen-to-square-regular.svg" alt="Icone para editar os dados">
               </a>
               <a href="#">
                  <img src="img/trash-can-regular.svg" alt="Icone para deletar dado">
               </a>
            </td>
         </tr>
         <tr>
            <td scope="row">2</td>
            <td scope="row">Vitória</td>
            <td scope="row">(99) 9999-9999</td>
            <td scope="row">
               
            </td>
         </tr>
         <tr>
            <td scope="row">3</td>
            <td scope="row">Germano</td>
            <td scope="row">(99) 9999-9999</td>
            <td scope="row">
               
            </td>
         </tr>
         <tr>
            <td scope="row">4</td>
            <td scope="row">Geovano</td>
            <td scope="row">(99) 9999-9999</td>
            <td scope="row">
               
            </td>
         </tr> -->
      </tbody>
   </table>
</main>
<script src="js/list_contacts.js"></script>
<!-- <script type="module" src="js/list_contacts.js"></script> -->
<?php
include_once("templates/footer.php");
?>