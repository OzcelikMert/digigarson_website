<?php
header('Content-Type: application/json');



$token = "ifei32i543itg54sai54iy6i5iVYBY8bygbYBUYVY7C5d5s3ss5t4dyrd2d2A";
if (isset($_POST["token"]) && $_POST["token"] == $token && isset($_POST["get"]) && $_POST["get"]=="data") {
    $DataValues = array();
    $number = 0;

    $db_host="localhost";
    $db_name="digigars_db";
    $db_user="digigars_user";
    $db_password="digigars_pass7072";
    
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name)or die('<div class="error"><h1>Veri Tabanı Bağlantısı Kurulamadı!</h1></div>');
    $conn->query("SET NAMES 'utf8'"); 
    $conn->query("SET CHARACTER SET utf8");  
    $conn->query("SET SESSION collation_connection = 'utf8_unicode_ci'"); 

        $sql = 'SELECT PCode,PName,PImage,PGroup,PInfo from Products Where BranchCode = 614';
        $data=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($data)) {
            $DataValues["id"][$number] = $row["PCode"];
            $DataValues["name"][$number] = $row["PName"];
            $DataValues["img"][$number] = $row["PImage"];
            $DataValues["category"][$number] = $row["PGroup"];
            $DataValues["info"][$number] = $row["PInfo"];
            $number++;

        }
        $number = 0;
        echo json_encode($DataValues); 

}

if (isset($_POST["token"]) && $_POST["token"]== $token && isset($_POST["get"]) && $_POST["get"]=="category") {
    $DataValues = array();
    $number = 0;

    $db_host="localhost";
    $db_name="digigars_db";
    $db_user="digigars_user";
    $db_password="digigars_pass7072";
    
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name)or die('<div class="error"><h1>Veri Tabanı Bağlantısı Kurulamadı!</h1></div>');
    $conn->query("SET NAMES 'utf8'"); 
    $conn->query("SET CHARACTER SET utf8");  
    $conn->query("SET SESSION collation_connection = 'utf8_unicode_ci'"); 

        $sql = 'SELECT PGroup from Products Where BranchCode = 614 group by PGroup';
        $data=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($data)) {
            $DataValues["category"][$number] = $row["PGroup"];
            $number++;

        }
        $number = 0;
        echo json_encode($DataValues); 
}

function safe($str){
    $name = htmlspecialchars(trim(strip_tags($str)));
    $name = str_replace("'", '', $name);
    return $name;
}

/*
$abc = array();
$abc["category"][0] = "MERT";
$abc["category"][1] = "AKIF";
$abc["category"][2] = "HATICE";
$abc["id"][0] = "MERT";
$abc["id"][1] = "AKIF";
$abc["id"][2] = "HATICE";
$json = json_encode($abc);
echo $json;

 $aa = array();
 $aa = (array)json_decode($json, true);
printf($aa["id"][0]); 
*/
?>