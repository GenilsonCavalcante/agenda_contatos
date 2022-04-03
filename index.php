<?php
include_once("templates/header.php");
?>
<main class="main">
   
   <h1 class="main__title">Minha Agenda</h1>

   <table class="table-contacts">
      <thead class="table-contacts__thead">
         <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">
               <!-- search -->
            </th>
         </tr>
      </thead>
      <tbody class="table-contacts__tbody">
         <tr>
            <td scope="row">1</td>
            <td scope="row">Genilson</td>
            <td scope="row">(99) 9999-9999</td>
            <td scope="row">
               <!-- actions -->
            </td>
         </tr>
         <tr>
            <td scope="row">2</td>
            <td scope="row">Vitória</td>
            <td scope="row">(99) 9999-9999</td>
            <td scope="row">
               <!-- actions -->
            </td>
         </tr>
         <tr>
            <td scope="row">3</td>
            <td scope="row">Germano</td>
            <td scope="row">(99) 9999-9999</td>
            <td scope="row">
               <!-- actions -->
            </td>
         </tr>
         <tr>
            <td scope="row">4</td>
            <td scope="row">Geovano</td>
            <td scope="row">(99) 9999-9999</td>
            <td scope="row">
               <!-- actions -->
            </td>
         </tr>
      </tbody>
   </table>
</main>
<?php
include_once("templates/footer.php");
?>