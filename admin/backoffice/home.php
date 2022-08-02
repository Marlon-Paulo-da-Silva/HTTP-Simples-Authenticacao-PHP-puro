<?php defined('ROOT') or die('Acesso inválido'); ?>

<?php require_once('navegacao.php') ?>

<?php
  // recolhe os dados das aplicações clientes da API

  $bd = new Database();

  $clientes_da_api = $bd->EXE_QUERY("SELECT * FROM `authentication`");
  // print_r($clientes_da_api);

?>

<div class="container mt-5">
  <div class="row">
    <div class="col">
      <h3>Clientes da API</h3>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>Cliente</th> 
            <th>Chave</th> 
          </tr>
        </thead>
        <tbody>
          <?php foreach($clientes_da_api as $cli){?>
            <tr>
              <td><?= $cli['client_name'] ?></td>
              <td><?= $cli['username']  ?></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
