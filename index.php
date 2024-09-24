<!DOCTYPE html>
<html lang="en">
<head>
<script src="../assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Escandalosa</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-static/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="navbar-static.css" rel="stylesheet">

  <!-- fav icon link -->
  <link rel="apple-touch-icon" sizes="180x180" href="c:\Users\alank\Downloads\favicon_io\apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="c:\Users\alank\Downloads\favicon_io\favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="c:\Users\alank\Downloads\favicon_io\favicon-16x16.png">
<link rel="manifest" href="c:\Users\alank\Downloads\favicon_io\site.webmanifest">
</head>
<body>
    
<?php  

    include_once("templates/topo.php");
    include_once("templates/menu.php");

    if(empty($_SERVER['QUERY_STRING'])){
        $pg = "principal.php";
        include_once($pg);
    }else{
        $pg = $_GET["pg"];
        include_once("$pg.php");
    }

    include_once("templates/rodape.php");
?>

</body>
</html>