<?php

$db_host="localhost";
$db_name="digigars_akif";
$db_user="digigars_uakif";
$db_password="akif7072@";

/*
$db_host="localhost";
$db_name="matrixte_digigarson";
$db_user="root";
$db_password="";
*/

/*---------------------------------------*/

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name)or die('<div class="error"><h1>Veri Tabanı Bağlantısı Kurulamadı!</h1></div>');
$conn->query("SET NAMES 'utf8'"); 
$conn->query("SET CHARACTER SET utf8");  
$conn->query("SET SESSION collation_connection = 'utf8_unicode_ci'"); 

function safe($str){
      $name = htmlspecialchars(trim(strip_tags($str)));
      $name = str_replace("'", '', $name);
      return $name;
}


?>