<?php 
    session_start();
    $titulo = "Consulta";
    include "./conexao.php";
    include "./layout/cabecalho.php";
?>

<h1>Consulta</h1>
<?php 
if( isset($_GET["mensagem"]) && !empty($_GET["mensagem"])){
    ?>
    <div class="alert alert-success">
				Usuário inserido com sucesso!
			</div>
    <?php
}
?>

<table class="table">
    <thead>
        <tr>
            <th>Responsável</th>
            <th>Pessoa RG</th>
            <th>Pessoa CPF</th>
            <th>Data de Nascimento</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Profissão</th>
            <th>Data de Entrega</th>
            <th>Entrevistador</th>
            <th>Recebido</th>
            <th>Aposentadoria</th>
            <th>Enfermo</th>
            <th>Auxílio</th>
            <th>Condição</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
        $query = "SELECT responsavel, pessoarg, pessoacpf, datanasc, telefone, endereco, numero, bairro, profissao, dataentrega, entrevistador, recebido, aposentadoria, enfermo, auxilio, condicao, id FROM familia ORDER BY id desc";
        $dados = mysqli_query($conexao, $query);
        if($dados) {
            while($linha = mysqli_fetch_assoc($dados)) {
                ?>
                    <tr>
                        <td><?php echo $linha["responsavel"]; ?></td>
                        <td><?php echo $linha["pessoarg"]; ?></td>
                        <td><?php echo $linha["pessoacpf"]; ?></td>
                        <td><?php echo $linha["datanasc"]; ?></td>
                        <td><?php echo $linha["telefone"]; ?></td>
                        <td><?php echo $linha["endereco"] . ', ' . $linha["numero"] . ', ' . $linha["bairro"]; ?></td>
                        <td><?php echo $linha["profissao"]; ?></td>
                        <td><?php echo $linha["dataentrega"]; ?></td>
                        <td><?php echo $linha["entrevistador"]; ?></td>
                        <td> 
                        <input type="checkbox" disabled <?php echo $linha["recebido"] ? 'checked' : ''; ?> />
                        </td>
                        <td>
                        <input type="checkbox" disabled <?php echo $linha["aposentadoria"] ? 'checked' : ''; ?> />
                        </td>
                        <td>
                        <input type="checkbox" disabled <?php echo $linha["enfermo"] ? 'checked' : ''; ?> />
                        </td>
                        <td>
                        <input type="checkbox" disabled <?php echo $linha["auxilio"] ? 'checked' : ''; ?> />
                        </td>
                        <td>
                        <input type="checkbox" disabled <?php echo $linha["condicao"] ? 'checked' : ''; ?> />
                        </td>

                        <td>
                        <a class="btn btn-warning" href="./familiaEditar.php?id=<?php echo $linha["id"]; ?>">Editar</a>
                        <a class="btn btn-danger" href="./familiaExcluir.php?id=<?php echo $linha["id"]; ?>">Excluir</a>
                    </td>
                </tr>
            <?php
        }
    }
?>




<?php 
    include "./layout/rodape.php";
?>