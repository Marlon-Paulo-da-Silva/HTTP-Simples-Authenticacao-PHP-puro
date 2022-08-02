<?php defined('ROOT') or die('Acesso inválido'); ?>

<div class="container-fluid">
  <div class="row bg-dark text-white">
    <div class="col-sm-6 col-12 p-2">MENU</div>
    <div class="col-sm-6 col-12 p-2 text-end">
      
      <span style="text-transform: uppercase;" class=""><?= $_SESSION['usuario'] ?></span>
      <span class="mx-2">|</span>
      <a style="text-decoration: none;color: white;" href="logout.php">SAIR</a>
    </div>
  </div>
</div>