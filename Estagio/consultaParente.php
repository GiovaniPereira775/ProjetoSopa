<?php 
    session_start();
    $titulo = "Cadastro de Parente";
    include "./conexao.php";
    include "./layout/cabecalho.php";
?>
    <table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Parentesco</th>
            <th>Idade</th>
            <th>Profissao</th>
            <th>Renda</th>
            <th>Especial</th>
            <th>ID da Familia</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
        $query = "SELECT id, nome, parentesco, idade, profissao, renda, especial, familia_id FROM pessoas";
		$dados = mysqli_query($conexao, $query);

        if($dados) {
            while($linha = mysqli_fetch_assoc($dados)) {
                
        ?>
                <tr>
                        <td><?php echo $linha["nome"]; ?></td>
                        <td><?php echo $linha["parentesco"]; ?></td>
                        <td><?php echo $linha["idade"]; ?></td>
                        <td><?php echo $linha["profissao"]; ?></td>
                        <td>  
                        <input type="checkbox" disabled <?php echo $linha["renda"] ? 'checked' : ''; ?> />
                        </td>
                        <td> 
                        <input type="checkbox" disabled <?php echo $linha["especial"] ? 'checked' : ''; ?> />
                        </td>
                        <td><?php echo $linha["familia_id"]; ?></td>
                
                    <td>
                        <a class="btn btn-warning" href="./parenteEditar.php?id=<?php echo $linha["id"]; ?>">Editar</a>
                        <a class="btn btn-danger" href="./parenteExcluir.php?id=<?php echo $linha["id"]; ?>">Excluir</a>
                    </td>
                </tr>
                <?php
        }
    }
?>
                        
			
<?php 
    include "./layout/rodape.php ";
?>