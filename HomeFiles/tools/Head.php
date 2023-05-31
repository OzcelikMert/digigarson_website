<?php 
    if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
        $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
        exit;
    }
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Google Verifications -->
<meta name="google-site-verification" content="axSX_F243Ccwf_YV1FRJLXFQR6UdtZ8OrWyOUG9PecA" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149675225-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-149675225-1');
</script>
<!-- SEO Meta Tags -->
<meta name="keywords" content="digigarson, otomasyon, crm, erp, online siparis sistemi, paket servis, pos">
<meta name="description" content="DigiGarson uygulama indirmeden akıllı telefonlarla siparişleri almak ve işinizi geliştirmek için etkili bir çözümdür. Müşterilerinizin Akıllı telefonlarıyla 'masadan , plajdan odadan' kolayca siparişlerini verirler.">
<meta name="author" content="Matrix Technology">
<base href="www.digigarson.com.tr">
<!-- Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
<link href="HomeFiles/css/bootstrap.css" rel="stylesheet">
<link href="HomeFiles/css/fontawesome-all.css" rel="stylesheet">
<link href="HomeFiles/css/swiper.css" rel="stylesheet">
<link href="HomeFiles/css/magnific-popup.css" rel="stylesheet">
<link href="HomeFiles/css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="HomeFiles/css/ZoomSlider_Css.css" />
<link rel='stylesheet' type='text/css' href='HomeFiles/css/popup_trynow.css' />
<link rel="stylesheet" href="HomeFiles/css/main.css">
<script type="text/javascript" src="HomeFiles/js/modernizr-2.6.2.min.js"></script>
<!-- Favicon  -->
<link rel="icon" href="HomeFiles/images/digilogo.png">
<link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2KGHCW');</script>
<!-- End Google Tag Manager -->