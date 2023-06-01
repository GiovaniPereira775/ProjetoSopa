<?php
    session_start();
 $titulo = "Editar Usuários";
 include "./layout/cabecalho.php";
 
 if(isset($_POST["id"], $_POST["responsavel"]) && !empty($_POST["id"]) && !empty($_POST["responsavel"])) {
     $id = $_POST["id"];
     $responsavel = $_POST["responsavel"];
     $pessoarg = $_POST["pessoarg"];
     $pessoacpf = $_POST["pessoacpf"];
     $datanasc = $_POST["datanasc"];
     $telefone = $_POST["telefone"];
     $endereco = $_POST["endereco"];
     $numero = $_POST["numero"];
     $bairro = $_POST["bairro"];
     $profissao = $_POST["profissao"];
     $dataentrega = $_POST["dataentrega"];
     $entrevistador = $_POST["entrevistador"];
     $recebido = $_POST["recebido"];
     $aposentadoria = isset($_POST["aposentadoria"]) && $_POST["aposentadoria"] == "on" ? true : false;
     $enfermo = isset($_POST["enfermo"]) && $_POST["enfermo"] == "on" ? true : false;
     $auxilio = isset($_POST["auxilio"]) && $_POST["auxilio"] == "on" ? true : false;
     $condicao = isset($_POST["condicao"]) && $_POST["condicao"] == "on" ? true : false;
     
     include "./conexao.php";
     $query = "UPDATE familia SET responsavel = '$responsavel', pessoarg = '$pessoarg', pessoacpf = '$pessoacpf', datanasc = '$datanasc', telefone = '$telefone', endereco = '$endereco', numero = '$numero', bairro = '$bairro', profissao = '$profissao', dataentrega = '$dataentrega', entrevistador = '$entrevistador', recebido = '$recebido', aposentadoria = '$aposentadoria', enfermo = '$enfermo', auxilio = '$auxilio', condicao = '$condicao' WHERE id = '$id'";
     
            echo $query;
            $resultado = mysqli_query($conexao, $query);

            header("Location: ./consulta_beneficiados.php?mensagem=Usuario editado com sucesso!");
            exit();
    }
    else if(isset($_GET["id"]) && !empty($_GET["id"]))
    {
        include "./conexao.php";

        $query = "select * from familia where id = ".$_GET["id"];

        $resultado = mysqli_query($conexao, $query);

        $dados = mysqli_fetch_array($resultado);

             $responsavel = $dados["responsavel"];
		         $pessoarg = $dados["pessoaRG"];
             $pessoacpf = $dados["pessoaCPF"];
             $datanasc = $dados["datanasc"];
             $telefone = $dados["telefone"];
             $endereco = $dados["endereco"];
             $numero = $dados["numero"];
             $bairro = $dados["bairro"];
             $profissao = $dados["profissao"];
             $dataentrega = $dados["dataentrega"];
             $entrevistador = $dados["entrevistador"];
             $recebido = $dados["recebido"]; 
             $aposentadoria = $dados["aposentadoria"];
             $enfermo = $dados["enfermo"];
             $auxilio = $dados["auxilio"];
             $condicao = $dados["condicao"];
    }
    else
    {
        header("Location: ./consulta_beneficiados.php?mensagem=Selecione um usuario para editar");
        exit();
    }
?>



<h1>Inserir Campos</h1>
	<form action="familiaEditar.php" method="post">
<div class="row"> 

      <div class="col-6 col-sm-3">


  <div class="form-group"> 
		<label for="responsavel">Responsável:</label>
		<input class="form-control" type="text" value="<?php echo $responsavel ?>" name="responsavel"><br><br>
    </div>

  

    <div class="form-group">     
		<label for="pessoarg">RG:</label>
		<input class="form-control" type="text" value="<?php echo $pessoarg ?>" name="pessoarg"><br><br></div>

    <div class="form-group"> 
		<label for="pessoacpf">CPF:</label>
		<input class="form-control" type="text" value="<?php echo $pessoacpf ?>" name="pessoacpf"><br><br></div>

    <div class="form-group"> 
		<label for="datanasc">Data de Nascimento:</label>
		<input class="form-control" type="date" value="<?php echo $datanasc ?>" name="datanasc"><br><br></div>

    <div class="form-group"> 
		<label for="telefone">Telefone:</label>
		<input class="form-control" type="text" value="<?php echo $telefone ?>" name="telefone"><br><br></div>

    <div class="form-group"> 
		<label for="endereco">Endereço:</label>
		<input class="form-control" type="text" value="<?php echo $endereco ?>" name="endereco"><br><br></div>

    <div class="form-group"> 
		<label for="numero">Número:</label>
		<input class="form-control" type="text" value="<?php echo $numero ?>" name="numero"><br><br></div>

    <div class="form-group"> 
		<label for="bairro">Bairro:</label>
		<input class="form-control" type="text" value="<?php echo $bairro ?>" name="bairro"><br><br></div>

    

    <div class="form-group"> 
		<label for="profissao">Profissão:</label>
		<input class="form-control" type="text" value="<?php echo $profissao ?>" name="profissao"><br><br></div>



    <div class="form-group"> 
		<label for="dataentrega">Data de Entrega:</label>
		<input class="form-control" type="date" value="<?php echo $dataentrega ?>" name="dataentrega"><br><br></div>

    

    <div class="form-group"> 
		<label for="entrevistador">Entrevistador:</label>
		<input class="form-control" type="text" value="<?php echo $entrevistador ?>" name="entrevistador"><br><br></div>

    <div class="form-group"> 
		<label for="recebido">Recebido:</label> 
		<input class="form-control" type="text" value="<?php echo $recebido ?>" name="recebido"><br><br></div>

		<input class="btn btn-success" type="submit" value="Atualizar">
	</form>

  </div>
  <div class="col-6 col-sm-3"> </div>
      <div class="col-6 col-sm-3"> 

      <div class="form-group"> 
		<label for="aposentadoria">Aposentadoria:</label>
        <input type="checkbox"  <?php echo $aposentadoria ? 'checked' : ''; ?> /> </div>

    <div class="form-group"> 
		<label for="enfermo">Enfermo:</label>
		<input type="checkbox"  <?php echo $enfermo ? 'checked' : ''; ?> /> </div>

    <div class="form-group"> 
		<label for="auxilio">Auxílio:</label>
		<input type="checkbox"  <?php echo $auxilio ? 'checked' : ''; ?> /> </div>

    <div class="form-group"> 
		<label for="condicao">Condição:</label>
		<input type="checkbox"  <?php echo $condicao ? 'checked' : ''; ?> /> </div>
      </div> </div>
<?php
    include "./layout/rodape.php";
?>