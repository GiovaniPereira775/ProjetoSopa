<?php 
    $titulo = "Login";
    include "./layout/cabecalho_login.php";
  
?>


    <h1> Login </h1>
    <form action="processa_login.php" method="post">
      <label for="login">Usuário:</label>
      <input type="text" id="login" name="login" required><br><br>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required><br><br>
      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Entrar">
    </form>

    

<?php 
    include "./layout/rodape.php";
?>
