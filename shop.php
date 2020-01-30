<?php
require_once 'administer.php';
$id_db = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$Page = $_GET['Page'];
$session->set_session_data("id", $id_db);
$session->set_session_data("Page", $Page);
$pag_dd = $session->get_session_data('Page');
$pag_d = "sub_catagories";
$Page = $_GET['Page'];
$msg = true;
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$slice = filter_var($session->get_session_data("slice"), FILTER_SANITIZE_STRING);

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
if (!basename($_SERVER['PHP_SELF']) == "shop.php"):
    $msg = FALSE;
    header('Location: index.php');
    exit();
endif;
if ($msg == TRUE) :
 $services = filter_var($session->get_session_data("services"), FILTER_SANITIZE_STRING);
$query = "select * from  sub_catagories  where id = ? ;";
$array = array($id_db);
 $rows = $class->sql_feth($Data_communication, $query, $array);
if (count($rows) > 0) :
foreach ($rows as $value):
$id=$value['id'];
$Name_ser=$value['Name'];
endforeach;
endif;
endif;

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php require_once './site_components/css.php'; ?>
        <style>
            .alertify-notifier.ajs-bottom.ajs-right {
                font-size: 16px;
                text-shadow: none;
                background: #1b4a1f !important;
            }
        </style>
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
                        <h1 class="white-text"><?php echo $services; ?></h1>
                        <!-- end page title -->
                    </div>
                    <div class="col-md-12 col-sm-12 breadcrumb text-uppercase margin-three no-margin-bottom wow fadeIn">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a class="white-text" href="index.php"><?php echo $array_lang['sub_cat']['HOME']; ?></a></li>
                            <li class="white-text"><a class="white-text" href="#"><?php echo $services; ?></a></li>
                            <li class="white-text"><?php echo $Name_ser; ?></li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->
        <!-- content section -->
        <section style="padding:50px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 sidebar">
                        <!-- widget  -->





                        <!-- ###############################################################################################
#################################################################################################
#################################################################################################-->

                        <div class="widget">
                            <h5 class="widget-title font-alt">Categories</h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr margin-ten"></div>
                            <div class="widget-body">
                                <ul class="category-list">
                                    <?php
                                    $array = array();
                                    $rows = $class->sql_feth($Data_communication, $query_sub_catagories, $array);
                                    if (count($rows) > 0) :
                                        foreach ($rows as $value):
                                            $id = $value['id'];
                                            $services = $value['services'];
                                            $Name = $value['Name'];
                                            $Image = $value['Image'];
                                            $Page = password_hash("sub_catagories", PASSWORD_DEFAULT);
                                            ?>
                                                <!--                                            <li class="active"><a href="#">Chairs<span>48</span></a></li>-->
                                            <li class="<?php
                                    if (trim($id) == $id_db): echo 'active';
                                    else: echo '';
                                    endif;
                                            ?>"><a href="shop.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"   ><?php echo $Name; ?><span>
                                                <?php
                                                            $sql = "select * from  products where sub = ?  ";
                                                            $array_var = array($id);
                                                            echo $products = $class->count($Data_communication, $sql, $array_var);
                                                            ?>
                                                    </span></a></li>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </ul>
                            </div>
                        </div>


                        <!-- ###############################################################################################
#################################################################################################
#################################################################################################-->


                        <?php
                        $query = "select * from  ads ORDER BY `ads`.`id` DESC limit 1;";
                        $array = array();
                        $rows = $class->sql_feth($Data_communication, $query, $array);
                        if (count($rows) > 0) :
                            foreach ($rows as $value):
                                $id = $value['id'];
                                $images = $value['images'];
                                ?>

                                <div class="widget">
                                    <div class="thin-separator-line bg-dark-gray no-margin-lr margin-ten"></div>
                                    <div class="widget-body">
                                        <img src="Public/ads/<?php echo $images; ?>" alt="ads" />
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                        <!-- end widget  -->





                    </div>



                    <!-- ###############################################################################################
                    #################################################################################################
                    #################################################################################################-->

                    <div class="col-md-9 col-sm-12">
                        <div class="product-listing margin-three">
                            <div class="results2">

                            </div>
                            <div id="loader_image">
                                <img src="Preloader.gif" alt="" style="width: 10%;"/></div>
                        </div>
                    </div>


                    <!-- ###############################################################################################
#################################################################################################
#################################################################################################-->




                </div>
            </div>
        </section>
        <!-- end content section -->
        <?php
        require_once './site_components/footer.php';
        require_once './site_components/js.php';
        ?>

        <script type="text/javascript">
            var busy = false;
            var limit = 3
            var offset = 0;
            function displayRecords(lim, off) {
                $.ajax({
                    type: "GET",
                    async: false,
                    url: "php/products.php",
                    data: {limit: limit, offset: offset},
                    cache: false,
                    beforeSend: function () {
                        $("#loader_message").html("").hide();
                        $('#loader_image').show();
                    },
                    success: function (html) {
                        $(".results2").append(html);
                        $('#loader_image').hide();
                        if (html == "") {
                            alert(111111);
                        } else {
                        }
                        window.busy = false;
                    }
                });
            }
            $(document).ready(function () {
                // start to load the first set of data
                if (busy == false) {
                    busy = true;
                    // start to load the first set of data
                    displayRecords(limit, offset);
                }
                $(window).scroll(function () {
                    // make sure u give the container id of the data to be loaded in.
                    if ($(window).scrollTop() + $(window).height() > $(".results2").height() && !busy) {
                        busy = true;
                        offset = limit + offset;
                        // this is optional just to delay the loading of data
                        setTimeout(function () {
                            displayRecords(limit, offset);
                        }, 500);
                        // you can remove the above code and can use directly this function
                        // displayRecords(limit, offset);

                    }
                });
            });
        </script>

        <script>

        </script>

    </body>
</html>
