   <?php 
    session_start();
    $titulo = "Pagina Principal";
    include "./layout/cabecalho.php";
   ?>
   
   <div class="row">
      <div class="col-6 col-sm-3">
          <div class="card-body">
          </div>
      </div>
      <div class="col-6 col-sm-3">
          <div class="card">
          <div>
            <a href="./consulta_beneficiados.php"> Consulta Beneficiados </a>
          </div>
          
        
  </div>

      </div>
      <div class="col-6 col-sm-3">
      
      </div>
    </div>

    <?php 
    include "./layout/rodape.php";
?>
