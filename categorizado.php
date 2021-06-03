<?php include("sys/config.php"); ?>

<!DOCTYPE html>
<html lang="<?php echo $linguagem;?>">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cidades Brasileiras</title>

    <link rel="stylesheet" href="assets/dist/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/dist/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico" />

    <meta name="author" content="Rafael Marques" />
    <meta name="contact" content="contato@rafaelmarques.net" />
    <meta name="description" content="Default pages create" />
    <meta name="keywords" content="sites, web, desenvolvimento" />
    <meta name="copyright" content="© 2021 Rafael Marques" />

    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
</head>

<body>
  <?php
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT nome FROM `estado` WHERE id=:id");
    $stmt->execute(['id' => $id]); 
    $result = $stmt->fetchAll();
    if (count($result)) {
      foreach ($result as $row) {
        $estado = $row['nome'];
      }
    } else {
      echo $lang["4"];;
    }
  ?>
  <?php echo $lang["2"]; ?> <b><?php echo $estado; ?></b> | <a href="index.php"><?php echo $lang["3"]; ?></a>
  <br />
  
  <?php
    $stmt = $conn->prepare("SELECT * FROM `cidade` WHERE uf=:id ORDER BY nome ASC");
    $stmt->execute(['id' => $id]); 
    $result = $stmt->fetchAll();
    
    if (count($result)) {
      foreach ($result as $row) {
        echo $row['nome'];
        echo "<br />";
      }
    } else {
      echo "Nennhum resultado retornado.";
    }
  ?>
  <br />
  <a href="index.php"><?php echo $lang["3"]; ?></a>

  <script src="assets/dist/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/dist/vuejs/vuejs.js"></script>
  <script src="assets/dist/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dist/fontawesome/js/fontawesome.min.js"></script>
  <script src="assets/js/global.js"></script>
</body>

</html>