<?php include("cabecalho.php"); ?>
<?php
  $nome = $_POST["nome"];
  $descricao = $_POST["descricao"];

  echo "<p class='alert-success'> A categoria $nome - $descricao, foi cadastrada</p>";

?>
<?php include("rodape.php"); ?>
