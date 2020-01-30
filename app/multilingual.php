<?php
if ($_SERVER['QUERY_STRING'] == "ar") {
       $_SESSION['lang'] = "ar";
} if ($_SERVER['QUERY_STRING'] == "eng") {
     $_SESSION['lang'] = "eng";
} elseif (!isset($_SESSION['lang'])) {
     $_SESSION['lang'] = "ar";
}elseif (!isset ($_SERVER['QUERY_STRING'])) {
      $_SESSION['lang'] = "ar";   
}
?>