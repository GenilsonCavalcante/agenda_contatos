<?php
include_once("templates/header.php");
?>

<main class="main">

   <h1 class="main__title">Minha Agenda</h1>

   <table class="table-contacts" id="table-contacts">
      <!-- CONTACTS LIST -->
   </table>

</main>

<script type="module" src="js/list_contacts.js"></script>
<script src="js/crud_localstorage.js"></script>
<!-- <script type="module" src="js/search.js"></script> -->

<?php
include_once("templates/footer.php");
?>