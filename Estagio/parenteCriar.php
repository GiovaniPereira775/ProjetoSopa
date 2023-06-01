<?php 
    session_start();
    $titulo = "Cadastro de Parente";
    include "./conexao.php";
    include "./layout/cabecalho.php";

    if(isset($_POST) && !empty($_POST)){
        if(empty($_POST["nome"]) || empty($_POST["parentesco"]) || empty($_POST["idade"]) || empty($_POST["profissao"]) || empty($_POST["renda"]) || empty($_POST["especial"]) || empty($_POST["familia_id"])){
            ?>
                <div class="alert alert-danger">
                        Procure preencher todos os campos obrigatórios
                </div>
            <?php
        } else {
            $nome = $_POST["nome"];
            $parentesco = $_POST["parentesco"];
            $idade = $_POST["idade"];
            $profissao = $_POST["profissao"];
            $renda = isset($_POST["renda"]) && $_POST["renda"] == "on" ? true : false;
            $especial = isset($_POST["especial"]) && $_POST["especial"] == "on" ? true : false;
            $familia_id = $_POST["familia_id"];
                
            $query = "INSERT INTO pessoas (nome, parentesco, idade, profissao, renda, especial, familia_id) VALUES ('$nome', '$parentesco', '$idade', '$profissao', $renda, $especial, '$familia_id')";
		    $resultado = mysqli_query($conexao, $query);
            
                if ($resultado == 1){
			
                //header("location: consulta_beneficiados.php?mensagem=Usuário inserido com sucesso!");
    
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