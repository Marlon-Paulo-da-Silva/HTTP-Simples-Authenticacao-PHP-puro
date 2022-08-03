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
      <div class="row">
        <div class="col-sm-6">
          <h3>Clientes da API</h3>
        </div>
        <div class="col-sm-6 text-end">
          <a href="?r=new_client" class="btn btn-primary btn-sm">Novo cliente</a>
        </div>
      </div>

      <div class="row">
        <div class="col">
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
  </div>
</div>
