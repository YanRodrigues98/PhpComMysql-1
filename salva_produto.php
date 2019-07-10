<?php include("cabecalho.php"); ?>
<?php

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

  $query = "insert into PRODUTO (NOME, PRECO) values ('{$nome}', {$preco})";

  $conexao = mysqli_connect('localhost', 'root', '', 'ecommerce');

  mysqli_query($conexao, $query);

  echo "<p class='alert-success'> O produto $nome, no valor $preco foi cadastrado!</p>";

?>
<?php include("rodape.php"); ?>
