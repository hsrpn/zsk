<?php

if (!empty($_GET['id'])) {
  require_once 'connect.php';
  
  $sql = "DELETE FROM `users` WHERE `users`.`id` = $_GET['id']";
  $connect -> query($sql);
  if($connect -> affected_rows > 0)
  {
    echo "ok";
  }
  else {
    echo "error";
  }
}
else {
  header('location: ../tabele/2_bazy_tabela.php');
}
 ?>
