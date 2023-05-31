<?php 
header("Content-type: text/css");
ob_start();
$white="#fffaec !important";
$white2="#e1e2e1 !important";
$black="#222 !important";
?>

.t-bg1{background:<?=$white?>;color:<?=$black?>}
.t-bg2{background:<?=$white2?>;color:<?=$black?>}
h1,h2{color:<?=$black?>}

<?
function phpcsszip($zip){
$zip= preg_replace('!/\*[^*]*\*+([^">[^*]*\*+)*/!', '', $zip);
$zip= str_replace(array("\r\n","\r","\n","\t",'  ','   ','    '), '', $zip);
return $zip;}

ob_end_flush();
?>

