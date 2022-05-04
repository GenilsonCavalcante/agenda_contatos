<?php
include_once("templates/header.php");
?>

<main class="main">
   <?php
      include_once("templates/back_button.php");
   ?>

   <div class="main__info">
      <h1 class="main__title">Informações</h1>

      <p class="main__info-p"><span class="main__info-span">ATENÇÃO:</span> Dados de contatos não serão armazenados em nosso banco de dados, apenas dados de login e senha. As informações de contatos são apenas armazenadas na memória do seu navegador, elas podem ser apagadas manualmente ou quando for apagado todo o seu histórico de navegação. Ao contrário, elas ficaram salvas, podendo fechar o navegador, ou até mesmo fechar o site, pois ainda não serão pedidas.</p>

      <p class="main__info-p">
         <span class="main__info-span">Funcionalidade Usada:</span> LocalStorage.
      </p>
   </div>

</main>

<?php
include_once("templates/footer.php");
?>