<?php 
    session_start();
    $titulo = "Editar Parente";
    include "./layout/cabecalho.php";

if(isset($_POST["id"], $_POST["responsavel"]) && !empty($_POST["id"]) && !empty($_POST["responsavel"])) {
     $id = $_POST["id"];
     $nome = $_POST["nome"];
     $parentesco = $_POST["parentesco"];
     $idade = $_POST["idade"];
     $profissao = $_POST["profissao"];
     $renda = isset($_POST["renda"]) && $_POST["renda"] == "on" ? true : false;
     $especial = isset($_POST["especial"]) && $_POST["especial"] == "on" ? true : false;
     $familia_id = $_POST["familia_id"];
     
     include "./conexao.php";
     $query = "UPDATE familia SET nome = '$nome', parentesco = '$parentesco', idade = '$idade', profissao = '$profissao', renda = '$renda', especial = '$especial', familida_id = '$familia_id' WHERE id = '$id'";
     
            echo $query;
            $resultado = mysqli_query($conexao, $query);

            header("Location: ./consultaParente.php?mensagem=Usuario editado com sucesso!");
            exit();
    }
    else if(isset($_GET["id"]) && !empty($_GET["id"]))
    {
        include "./conexao.php";

        $query = "select * from pessoas where id = ".$_GET["id"];

        $resultado = mysqli_query($conexao, $query);

        $dados = mysqli_fetch_array($resultado);

             $nome = $dados["nome"];
		     $parentesco = $dados["parentesco"];
             $idade = $dados["idade"];
             $profissao = $dados["profissao"];
             $renda = $dados["renda"];
             $especial = $dados["especial"];
             $familia_id = $dados["familia_id"];
    }
    else
    {
        header("Location: ./consultaParente.php?mensagem=Selecione um usuario para editar");
        exit();
    }
?>
<h1>Inserir Campos</h1>
            <form action="parenteCriar.php" method="post">
        <div class="row"> 

    <div class="col-6 col-sm-3">
        <div class="form-group"> 
                <label for="responsavel">Nome:</label>
                <input class="form-control" type="text" name="nome"><br><br>
            </div>

            <div class="form-group">     
                <label for="pessoarg">Parentesco:</label>
                <input class="form-control" type="text" name="parentesco"><br><br></div>

            <div class="form-group"> 
                <label for="pessoacpf">Idade:</label>
                <input class="form-control" type="text" name="idade"><br><br></div>

            <div class="form-group"> 
                <label for="datanasc">Profissao:</label>
                <input class="form-control" type="text" name="profissao"><br><br></div>
            
            <div class="form-group"> 
                <label for="datanasc">ID da Familia:</label>
                <input class="form-control" type="text" name="familia_id"><br><br></div>

                <input class="btn btn-success" type="submit" value="Enviar">
    </div>
    <div class="col-6 col-sm-3"> </div>
            <div class="col-6 col-sm-3"> 

            <div class="form-group"> 
                <label for="renda">Renda:</label>
                <input type="checkbox" name="renda"><br><br></div>


            <div class="form-group"> 
                <label for="especial">Especial:</label>
                <input type="checkbox" name="especial"><br><br></div>
<?php 
    include "./layout/rodape.php";
?>