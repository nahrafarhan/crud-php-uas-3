<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_asset':
    include 'pages/data_asset.php';
    break;
  }
}else{
    include "pages/home.php";
  }
?>
