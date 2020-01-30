<?php
require_once './FileConnection/Data_connection.php';
require_once './FileConnection/Extra_functions.php';
require_once '../Classes/Achieve.php';
require_once './Classes/Session.php';
require_once './Classes/Component.php';
$class = new Achieve();
$Component = new Component();
$session = new Session("login.php");
#####################################################################
QUERY_STRING();
SET_LANG__();
Kill_counter($class,$Data_communication);
//##############################################################
//##############################################################
require_once './lang/array.php';
if ($_SESSION['lang'] == "ar") {
    $array_culam = array("7", "8", "9", "10", "11", "12");
    $ABOUT = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 1");
    $VISION = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 2");
    $JOIN = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 3");
    $index = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 4");
    $footer = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 5");
    $form = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 6");
    $contact = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 7");
    $NOTES = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 8");
    $query_services = "select * from  services where Language = 'English'  ORDER BY `services`.`id` DESC limit 4;";
    $query_form = "select * from  form where Language = 'Arabic'  ORDER BY `form`.`id` ASC ;";
    $query_sub_catagories = "select * from  sub_catagories where Language = 'Arabic';";
    $query_products = "select * from  products where Language = 'Arabic'  ";
    //#################################################################################
    $queryslider = "select * from  slider ORDER BY `slider`.`id` DESC ;";
    $queryservices = "select * from  services  where Language = 'Arabic'  ORDER BY `services`.`id` DESC ;";
    $queryevents = "select * from  events where Language = 'Arabic' ORDER BY `events`.`id` DESC ;";
    $queryprojects = "select * from  projects where Language = 'Arabic' ORDER BY `projects`.`id` DESC limit 8;";
    $queryour_selection1 = "select * from  our_selection where id = ? or  id = ? ";
    $queryour_selection2 = "select * from  our_selection where id = ? or id = ? ";
    $queryour_selection3 = "select * from  our_selection where id = ? or id = ? ";
    $query_services = "select * from  services where Language = 'Arabic'  ORDER BY `services`.`id` DESC limit 4;";
    $query_pro = "select * from  projects where Language = 'Arabic'  ORDER BY `projects`.`id` DESC ;";
    $query_project_category = "select * from  project_category where Language = 'Arabic'  ORDER BY `project_category`.`id` DESC limit 4;";
    $query_nav = "select * from  services  where Language = 'Arabic' ORDER BY `services`.`id` DESC limit 7;";
} elseif ($_SESSION['lang'] == "eng") {
    $array_culam = array("1", "2", "3", "4", "5", "6");
    $ABOUT = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
    $VISION = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 2");
    $JOIN = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 3");
    $index = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 4");
    $footer = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 5");
    $form = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 6");
    $contact = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 7");
    $NOTES = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 8");

    //#################################################################################
    $queryslider = "select * from  slider ORDER BY `slider`.`id` DESC ;";
    $queryservices = "select * from  services  where Language = 'English'  ORDER BY `services`.`id` DESC ;";
    $queryevents = "select * from  events where Language = 'English' ORDER BY `events`.`id` DESC ;";
    $queryprojects = "select * from  projects where Language = 'English' ORDER BY `projects`.`id` DESC limit 8;";
    $queryour_selection1 = "select * from  our_selection where id = ? or  id = ? ";
    $queryour_selection2 = "select * from  our_selection where id = ? or id = ? ";
    $queryour_selection3 = "select * from  our_selection where id = ? or id = ? ";
    $query_services = "select * from  services where Language = 'English'  ORDER BY `services`.`id` DESC limit 4;";
    $query_pro = "select * from  projects where Language = 'English'  ORDER BY `projects`.`id` DESC ;";
    $query_project_category = "select * from  project_category where Language = 'English'  ORDER BY `project_category`.`id` DESC limit 4;";
    $query_form = "select * from  form where Language = 'English'  ORDER BY `form`.`id` ASC ;";
    $query_nav = "select * from  services  where Language = 'English' ORDER BY `services`.`id` DESC limit 7;";
    $query_sub_catagories = "select * from  sub_catagories where Language = 'English';";
    $query_products = "select * from  products where Language = 'English'  ";
} else {
    $array_culam = array("7", "8", "9", "10", "11", "12");
    $ABOUT = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 1");
    $VISION = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 2");
    $JOIN = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 3");
    $index = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 4");
    $footer = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 5");
    $form = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 6");
    $contact = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 7");
    $NOTES = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components_ar` where id = 8");
    //#################################################################################
    $queryslider = "select * from  slider ORDER BY `slider`.`id` DESC ;";
    $queryservices = "select * from  services  where Language = 'Arabic'  ORDER BY `services`.`id` DESC ;";
    $queryevents = "select * from  events where Language = 'Arabic' ORDER BY `events`.`id` DESC ;";
    $queryprojects = "select * from  projects where Language = 'Arabic' ORDER BY `projects`.`id` DESC limit 8;";
    $queryour_selection1 = "select * from  our_selection where id = ? or  id = ? ";
    $queryour_selection2 = "select * from  our_selection where id = ? or id = ? ";
    $queryour_selection3 = "select * from  our_selection where id = ? or id = ? ";
    $query_services = "select * from  services where Language = 'Arabic'  ORDER BY `services`.`id` DESC limit 4;";
    $query_pro = "select * from  projects where Language = 'Arabic'  ORDER BY `projects`.`id` DESC ;";
    $query_project_category = "select * from  project_category where Language = 'Arabic'  ORDER BY `project_category`.`id` DESC limit 4;";
    $query_form = "select * from  form where Language = 'Arabic'  ORDER BY `form`.`id` ASC ;";
    $query_nav = "select * from  services  where Language = 'Arabic' ORDER BY `services`.`id` DESC limit 7;";
    $query_sub_catagories = "select * from  sub_catagories where Language = 'Arabic';";
    $query_products = "select * from  products where Language = 'Arabic'  ";
}
//##############################################################
//##############################################################
$css = '<link href="css/rtl.css" rel="stylesheet" type="text/css"/>';
//================================================================














