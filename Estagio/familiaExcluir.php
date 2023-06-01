<?php 
    session_start();

    if(isset($_GET["id"]) && !empty($_GET["id"]))
    {
        include "./conexao.php";
        $query = "Delete from familia where id = ".$_GET["id"];
        $resultado = mysqli_query($conexao, $query);

        if($resultado)
        {
            
            header("Location: ./consulta_beneficiados.php?mensagem=Usuario excluido com sucesso");
            exit();
        }else{
            header("Location: ./consulta_beneficiados.php?mensagem=Ocorreu algum erro");
            exit();
        }
    }
    else
    {
        header("Location: ./consulta_beneficiados.php?mensagem=Selecione um usuario para apagar");
        exit();
    }
?>