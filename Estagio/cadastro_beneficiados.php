<?php 
	session_start();
  	$titulo = "Cadastro";
  	include "./layout/cabecalho.php";
	include "conexao.php";

	if(isset($_GET["mensagem"]) && !empty($_GET["mensagem"])){
?>
	<div class="alert alert-warning">
<?php echo $_GET["mensagem"]; ?>
	</div>
<?php
}

if(isset($_POST) && !empty($_POST)){
	if(empty($_POST["responsavel"]) || empty($_POST["pessoarg"]) || empty($_POST["pessoacpf"]) || empty($_POST["datanasc"]) || empty($_POST["telefone"]) || empty($_POST["endereco"]) || empty($_POST["numero"]) || empty($_POST["bairro"]) || empty($_POST["profissao"]) || empty($_POST["dataentrega"]) || empty($_POST["entrevistador"]) || empty($_POST["recebido"])){

?>
	<div class="alert alert-danger">
Por favor, preencha todos os campos obrigatórios!
	</div>
<?php
} else {
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

		$query = "INSERT INTO familia (responsavel, pessoarg, pessoacpf, datanasc, telefone, endereco, numero, bairro, profissao, dataentrega, entrevistador, recebido, aposentadoria, enfermo, auxilio, condicao) VALUES ('$responsavel', '$pessoarg', '$pessoacpf', '$datanasc', '$telefone', '$endereco', '$numero', '$bairro', '$profissao', '$dataentrega', '$entrevistador', '$recebido', $aposentadoria, $enfermo, $auxilio, $condicao)";
		$resultado = mysqli_query($conexao, $query);
		if ($resultado == 1){
			
			header("location: consulta_beneficiados.php?mensagem=Usuário inserido com sucesso!");

			?>
			<div class="alert alert-success">
				Tabela modificada com sucesso!
			</div>
			<?php
		} else {
			?>
			<div class="alert alert-danger">
				Ocorreu um erro ao inserir o usuário. Por favor, tente novamente mais tarde.
			</div>
			<?php
		}
	}
} else {
	?>
	<div class="alert alert-info">
		Por favor, preencha o formulário para adicionar um usuário.
	</div>
	<?php
	}	
?>
  
	<h1>Inserir Campos</h1>
	<form action="cadastro_beneficiados.php" method="post">
<div class="row">

      <div class="col-6 col-sm-3">
  <div class="form-group"> 
		<label for="responsavel">Responsável:</label>
		<input class="form-control" type="text" name="responsavel"><br><br>
    </div>

    <div class="form-group">     
		<label for="pessoarg">RG:</label>
		<input class="form-control" type="text" name="pessoarg"><br><br></div>

    <div class="form-group"> 
		<label for="pessoacpf">CPF:</label>
		<input class="form-control" type="text" name="pessoacpf"><br><br></div>

    <div class="form-group"> 
		<label for="datanasc">Data de Nascimento:</label>
		<input class="form-control" type="date" name="datanasc"><br><br></div>

    <div class="form-group"> 
		<label for="telefone">Telefone:</label>
		<input class="form-control" type="text" name="telefone"><br><br></div>

    <div class="form-group"> 
		<label for="endereco">Endereço:</label>
		<input class="form-control" type="text" name="endereco"><br><br></div>

    <div class="form-group"> 
		<label for="numero">Número:</label>
		<input class="form-control" type="text" name="numero"><br><br></div>

    <div class="form-group"> 
		<label for="bairro">Bairro:</label>
		<input class="form-control" type="text" name="bairro"><br><br></div>

    

    <div class="form-group"> 
		<label for="profissao">Profissão:</label>
		<input class="form-control" type="text" name="profissao"><br><br></div>



    <div class="form-group"> 
		<label for="dataentrega">Data de Entrega:</label>
		<input class="form-control" type="date" name="dataentrega"><br><br></div>

    

    <div class="form-group"> 
		<label for="entrevistador">Entrevistador:</label>
		<input class="form-control" type="text" name="entrevistador"><br><br></div>

    <div class="form-group"> 
		<label for="recebido">Recebido:</label>
		<input class="form-control" type="text" name="recebido"><br><br></div>

		<input class="btn btn-success" type="submit" value="Enviar">
	</form>

  </div>
  <div class="col-6 col-sm-3"> </div>
      <div class="col-6 col-sm-3"> 

      <div class="form-group"> 
		<label for="aposentadoria">Aposentadoria:</label>
		<input type="checkbox" name="aposentadoria"><br><br></div>


    <div class="form-group"> 
		<label for="enfermo">Enfermo:</label>
		<input type="checkbox" name="enfermo"><br><br></div>

    <div class="form-group"> 
		<label for="auxilio">Auxílio:</label>
		<input type="checkbox" name="auxilio"><br><br></div>

    <div class="form-group"> 
		<label for="condicao">Condição:</label>
		<input type="checkbox" name="condicao"><br><br></div>
      </div> </div>
<?php 
  include "./layout/rodape.php";
?>