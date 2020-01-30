<?php require_once 'administer.php'; ?>
<?php
$a = new Achieve();
$pag = "services";
$Page = $_GET['Page'];
$msg = true;
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
if (!password_verify($pag, $Page)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
}
if (empty($id)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
} elseif (empty($Page)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
}
if (is_int($id)):
    $msg = FALSE;
    header('Location: index.php');
    exit();
endif;

if (!basename($_SERVER['PHP_SELF']) == "sub-cat.php"):
    $msg = FALSE;
    basename($_SERVER['PHP_SELF']);
    header('Location: index.php');
    exit();
endif;
if ($msg == TRUE) :
    $id_box = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "select * from  services  where id = ? ;";
    $array = array($id_box);
    $rows = $class->sql_feth($Data_communication, $query, $array);
    if (count($rows) > 0) :
        foreach ($rows as $value):
            $slice = $value['slice'];
            $session->set_session_data("slice", $slice);
        endforeach;
    endif;
    $session->set_session_data("services", $_GET['Title']);

    $slice = filter_var($session->get_session_data("slice"), FILTER_SANITIZE_STRING);
    ?>
    <!doctype html>
    <html class="no-js" lang="en">
        <head>
            <?php require_once './site_components/css.php'; ?>
        </head>
        <body>
            <!-- navigation panel -->
            <?php require_once './site_components/navigation.php'; ?>
            <!-- end navigation panel -->
            <!-- head section -->






            <section class="page-title parallax3 parallax-fix page-title-large page-title-shop">
                <div class="opacity-light bg-dark-gray"></div>
                <img class="parallax-background-img" src="Public/services/slice/<?php echo $slice; ?>" alt="" />
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 wow fadeIn">
                            <!-- page title tagline -->
                            <span class="text-uppercase white-text"><?php echo $array_lang['sub_cat']['EVENTS']; ?></span>
                            <!-- end title tagline -->
                            <!-- page title -->
                            <h1 class="white-text"><?php echo $_GET['Title']; ?></h1>
                            <!-- end page title -->
                        </div>
                        <div class="col-md-12 col-sm-12 breadcrumb text-uppercase margin-three no-margin-bottom wow fadeIn">
                            <!-- breadcrumb -->
                            <ul>
                                <li><a class="white-text" href="index.php"><?php echo $array_lang['sub_cat']['HOME']; ?></a></li>
                                <li class="white-text"><a class="white-text" href="#"><?php echo $_GET['Title']; ?></a></li>
                            </ul>
                            <!-- end breadcrumb -->
                        </div>
                    </div>
                </div>
            </section>


            <!-- ###############################################################################################
                #################################################################################################
                #################################################################################################-->

            <!-- end head section -->
            <section class="wow fadeIn">
                <div class="container">
                    <div class="row">
                        <?php
                        $query = "select * from  sub_catagories  where services = ? ;";
                        $array = array($id_box);
                        $rows = $class->sql_feth($Data_communication, $query, $array);
                        if (count($rows) > 0) :
                            foreach ($rows as $value):
                                $id = $value['id'];
                                $services = $value['services'];
                                $Name = $value['Name'];
                                $Image = $value['Image'];
                                $Page = password_hash("sub_catagories", PASSWORD_DEFAULT);
                                $array = array($services);
                                ?>
                                <div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="300ms">
                                    <img src="Public/sub_catagories/<?php echo $Image; ?>" alt=""/>
                                    <figure class="position-relative bg-white">
                                        <span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600"><?php echo sel_services($Data_communication, $id_box); ?></span>
                                        <span class="team-post text-uppercase letter-spacing-2 display-block"><?php echo $Name; ?></span>
                                        <div class="person-social margin-five no-margin-bottom"><a href="shop.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>&services=<?php echo $_GET['Title']; ?>"><?php echo $array_lang['sub_cat']['View all products']; ?></a></div>
                                    </figure>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </section>


            <!-- ###############################################################################################
      #################################################################################################
      #################################################################################################-->

            <?php
            require_once './site_components/footer.php';
            require_once './site_components/js.php';
            ?>
        </body>
    </html>
    <?php
endif;
?>
