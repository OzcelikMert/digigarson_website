<?php 

/* ----------------------------- Lang Function ------------------------ */
if(isset($_GET['lang'])){
    $Language = htmlspecialchars($_GET['lang']);
}else
if(isset($_COOKIE['lang'])){
    $Language = htmlspecialchars($_COOKIE['lang']);
    
}else{
    $Language ="tr";
}
switch($Language){
    case "en" :
    unset($_COOKIE['lang']); 
    setcookie("lang", "en");
    if(file_exists("./HomeFiles/tools/Language/lang_en.php")){
        include_once("./HomeFiles/tools/Language/lang_en.php");
    }else if(file_exists("./tools/Language/lang_en.php")){
        include_once("./tools/Language/lang_en.php");
    }
    break;
    default :
    setcookie("lang", "tr");
    if(file_exists("./HomeFiles/tools/Language/lang_tr.php")){
        include_once("./HomeFiles/tools/Language/lang_tr.php");
    }else if(file_exists("./tools/Language/lang_tr.php")){
        include_once("./tools/Language/lang_tr.php");
    }
}

?>