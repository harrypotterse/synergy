<title>Synergy</title>
<meta name="description" content="<?php echo  $Meta_Details ; ?>">
<meta name="keywords" content="<?php echo  $Meta_Keywords ; ?>">
<meta charset="utf-8">
<meta name="author" content="Walaa Ramadan">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<!-- animation --> 
<link rel="stylesheet" href="css/animate.css" />
<!-- bootstrap --> 
<link rel="stylesheet" href="css/bootstrap.css" />
<!-- et line icon --> 
<link rel="stylesheet" href="css/et-line-icons.css" />
<!-- font-awesome icon -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- revolution slider -->
<link rel="stylesheet" href="css/extralayers.css" />
<link rel="stylesheet" href="css/settings.css" />
<!-- magnific popup -->
<link rel="stylesheet" href="css/magnific-popup.css" />
<!-- owl carousel -->
<link rel="stylesheet" href="css/owl.carousel.css" />
<link rel="stylesheet" href="css/owl.transitions.css" />
<link rel="stylesheet" href="css/full-slider.css" />
<!-- text animation -->
<link rel="stylesheet" href="css/text-effect.css" />
<!-- hamburger menu  -->
<link rel="stylesheet" href="css/menu-hamburger.css" />
<!-- common -->
<link rel="stylesheet" href="css/style.css" />
<!-- responsive -->
<link rel="stylesheet" href="css/responsive.css" />
 <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/semantic.min.css"/>
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/bootstrap.min.css"/>

        <!--
            RTL version
        -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.rtl.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.rtl.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/semantic.rtl.min.css"/>
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/bootstrap.rtl.min.css"/>
<!--[if IE]>
    <link rel="stylesheet" href="css/style-ie.css" />
<![endif]-->
<!--[if IE]>
    <script src="js/html5shiv.js"></script>
<![endif]-->
<?php
QUERY_STRING();
if ( $_SESSION['lang'] == "ar") {
    $_SESSION['lang'] = "ar";
    echo '<link href="css/rtl.css" rel="stylesheet" type="text/css"/>';
    
} if ( $_SESSION['lang'] == "eng") {
    echo '<link href="css/ltr.css" rel="stylesheet" type="text/css"/>';
} elseif (!isset( $_SESSION['lang'])) {
    $_SESSION['lang'] = "ar";
    echo '<link href="css/rtl.css" rel="stylesheet" type="text/css"/>';
} elseif ( $_SESSION['lang'] == "") {
    $_SESSION['lang'] = "ar";
    echo '<link href="css/rtl.css" rel="stylesheet" type="text/css"/>';
}
?>
      