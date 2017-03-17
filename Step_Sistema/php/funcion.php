<?php
   session_start();
  include'../cnx/conexion.php';

  function LlenarCampo($text){
  if($text == ""){
      return true;
    }else{
      return false;
  }
  return $text;
  }

  /*-----*/

?>
