<?php
include("config.php");

$nome = $_POST["nome"];
$valor = $_POST["valor"];
$categoria = $_POST["categoria"];
$inclusao = date('y-m-d');

$cat = $conn->prepare('SELECT * FROM categoria WHERE id = :id');
$cat->execute(array('id' => $categoria));
$cat = $cat->fetchAll();
foreach ($cat as $rcate) {
    $tipocategoria = $rcate['tipo'];
}

$insert = $conn->prepare("INSERT INTO valores (descricao, valor, categoria, tipo, inclusao) VALUES (?, ?, ?, ?, ?)");
$insert->bindParam(1, $nome);
$insert->bindParam(2, $valor);
$insert->bindParam(3, $categoria);
$insert->bindParam(4, $tipocategoria);
$insert->bindParam(5, $inclusao);

if ($insert ->execute()) {
  echo "New record created successfully";
  header('Location: ../');
exit;
} else {
  echo "Unable to create record";
}
