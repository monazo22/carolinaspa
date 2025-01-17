<?php
  //Definir un nombre para cachear
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace('.php', "", $archivo);

  //Definir archivo para cachear (puede ser .php tambien)
  if(isset($_GET['id'])){
    $archivoCache = 'cache/'.$pagina.'-'.$_GET['id'].'.html';
  } else {
    $archivoCache = 'cache/'.$pagina.'.html';
  }
  
  //Cuanto tiempo debera estar almacenado ese archivo
  $tiempo = 36000;
  //Verificar que el archivo existe, el tiempo sea el adecuado y lo muestre
  if(file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)){
    include $archivoCache;
    exit;
  }
  //Si el archivo no existe o el tiempo de cacheo ya se vencio genera uno nuevo
  ob_start();

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $titulo; ?> | Carolinaspa</title>
  </head>
  <body>
    <header class="encabezado-sitio container">
      <div class="row justify-content-md-between align-items-center">
        <div class="col-lg-4">
          <a href="index.php">
            <img src="img/logo.png" alt="logo carolina spa" class="img-fluid d-block mx-auto">
          </a>
          </div>
        <div class="col-lg-4">
          <nav class="redes-sociales">
            <ul>
              <li>
                <a href="http://facebook.com">
                  <i class="fab fa-facebook"></i>
                  <span class="sr-only">facebook</span></a>
                </li>
              <li>
                <a href="http://twitter.com">
                  <i class="fab fa-twitter"></i>
                  <span class="sr-only">twitter</span></a>
                </li>
              <li>
                <a href="http://instagram.com">   
                  <i class="fab fa-instagram"></i>               
                  <span class="sr-only">instagram</span></a>
                </li>
              <li>
                <a href="http://pinterest.com"> 
                  <i class="fab fa-pinterest-p"></i>                 
                  <span class="sr-only">pinterest</span></a>
                </li>
              <li>
                <a href="http://youtube.com"> 
                  <i class="fab fa-youtube"></i>               
                  <span class="sr-only">youtube</span></a>
                </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>