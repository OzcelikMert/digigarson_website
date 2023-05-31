
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="yandex-verification" content="03bc0b8c2bac8a40" />
    <title>DigiGarson | Zekiyim, Hızlıyım, Çalışkanım!</title>
    <link rel="stylesheet" type="text/css" href="HomeFiles/css/sidebar.css?v=<?=md5_file('HomeFiles/css/sidebar.css')?>">
    <?php include("HomeFiles/tools/Head.php"); ?>
    <script src="HomeFiles/animate/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="HomeFiles/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="HomeFiles/css/font.css">
</head>
<body data-spy="scroll" data-target=".fixed-top">
<?php
try {
    //LOG SYTEM
    $ip = $_SERVER['REMOTE_ADDR'];
    $folder = "C:/vhosts/digigarson.com/http/dg/".date("Y-m-d")."/";
    
    if (!file_exists($folder)) {mkdir($folder); }
    $log = date("h:s:i")." | ".$_SERVER['REQUEST_URI']."\r\n";
    file_put_contents($folder."s_".($ip).'.log', $log, FILE_APPEND);

} catch (\Throwable $th) {}
?>

  <?php
  
    include("HomeFiles/tools/Preloader.php");
    // Language Start
    include("HomeFiles/tools/Values.php");
    // Language Finished
    include("HomeFiles/tools/TopNavbar.php");
    include("HomeFiles/tools/Navbar.php");
    include("HomeFiles/tools/Header.php");
    include("HomeFiles/tools/Features.php");
    include("HomeFiles/tools/FeatureBox.php");
    include("HomeFiles/tools/Video.php");
    include("HomeFiles/tools/Details.php");
    include("HomeFiles/tools/DetailBox.php");
    include("HomeFiles/tools/Screenshots.php");
    //include("./tools/Testimonials.php");
    include("HomeFiles/tools/Download.php");
    include("HomeFiles/tools/Statistics.php");
    include("HomeFiles/tools/Contact.php");
    include("HomeFiles/tools/Footer.php");
    include("HomeFiles/tools/Copyright.php");
    include("HomeFiles/tools/Scripts.php");
    // TRYNOW Popup //
    include("HomeFiles/tools/Popup_trynow.php");
    include("HomeFiles/tools/Cookie.php");
    ?>
<script>
/*
  if (location.protocol != 'https:')
  {
  location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
  }
     */
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
    );
    wow.init();

 
    </script>
<script src="HomeFiles/js/popup_trynow.js?v=<?=md5_file('HomeFiles/js/popup_trynow.js')?>"></script>
<script src='HomeFiles/js/sidebar.js?v=<?=md5_file('HomeFiles/js/sidebar.js')?>'></script>
</body>
</html>