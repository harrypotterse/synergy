<?php
require_once './administer.php';
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
        <section class="content-top-margin page-title page-title-small border-top-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                        <!-- page title -->
                        <h1 class="black-text"><?php echo $form->statement6; ?></h1>
                        <!-- end page title -->
                    </div>
                    <div class="col-md-4 col-sm-12 breadcrumb text-uppercase wow fadeInUp xs-display-none" data-wow-duration="600ms">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="index.php"><?php echo   $array_lang['form']['HOME']; ?></a></li>
                            <li><?php echo $form->statement6; ?></li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->
        <!-- content section -->
        <section class="parallax8 parallax-fix no-padding parallax-gray-bg wow fadeIn sm-bg-yellow">
            <img class="parallax-background-img" src="Public/form/<?php echo $form->statement5; ?>" alt="" />
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 pull-right sm-no-padding">
                        <div class="bg-yellow padding-seven">
                            <div class="padding-seven xs-no-padding-left-right">
                                <h1 class="white-text"><?php echo $form->statement1; ?><br> <?php echo $form->statement2; ?></h1>
                                <p class="text-large black-text margin-five"><?php echo $form->statement3; ?></p>
                                <p class="text-med black-text margin-five"><?php echo $form->statement4; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wow fadeIn xs-no-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <!-- jobs opening position -->
                        <?php
                        $array = array();
                        $rows = $class->sql_feth($Data_communication, $query_form, $array);
                        if (count($rows) > 0) :
                            $id_pp = 0;
                            foreach ($rows as $value):
                                $id_pp++;
                                $id = $value['id'];
                                $explained1 = $value['explained1'];
                                $explained2 = $value['explained2'];
                                $explained3 = $value['explained3'];
                                $explained4 = $value['explained4'];
                                $explained5 = $value['explained5'];
                                if ($id == "1"):
                                    $href = "<a class='highlight-button-black-border btn btn-medium' href='index.html#blog-slider-main'>our services</a>";
                                elseif (trim($id) == "1") :
                                    $href = "<a class='highlight-button-black-border btn btn-medium' href='index.html#blog-slider-main'>our services</a>";
                                elseif ($id == "2") :
                                    $href = "<a class='highlight-button-black-border btn btn-medium' href='shop-cart.html'>your cart</a>";
                                elseif ($id == "3") :
                                    $href = "<a class='highlight-button-black-border btn btn-medium' href='#'>Apply Now</a>";
                                endif;
                                if ($id == "4"):
                                    $href = "<a class='highlight-button-black-border btn btn-medium' href='index.html#blog-slider-main'>خدماتنا</a>";
                                elseif (trim($id) == "4") :
                                    $href = "<a class='highlight-button-black-border btn btn-medium' href='index.html#blog-slider-main'>خدماتنا</a>";
                                elseif ($id == "5") :
                                    $href = "<a class='highlight-button-black-border btn btn-medium' href='shop-cart.html'>عربة التسوق</a>";
                                elseif ($id == "6") :
                                    $href = "<a class='highlight-button-black-border btn btn-medium' href='#'>تقدم الآن</a>";
                                endif;
                                ?>
                                <div class="clearfix">
                                    <div class="col-md-6 col-sm-12 no-padding-left position-relative">
                                        <h2 class="font-weight-600">0<?php echo $id_pp; ?></h2>
                                        <div class="separator-line bg-black no-margin-lr"></div>
                                        <p class="text-large black-text letter-spacing-2 no-margin-bottom"><?php echo $array_lang['form']['STEP ']; ?> <?php echo $id_pp; ?></p>
                                        <p class="text-uppercase letter-spacing-1"><?php echo $explained1; ?></p> 
                                        <?php echo $href; ?>
                                    </div>
                                    <div class="col-md-6 col-sm-12 no-padding-left">
                                        <p class="black-text"><strong><?php echo $explained2; ?></strong></p>
                                        <p class="margin-one"><?php echo $explained3; ?></p>
                                        <p class="black-text margin-ten no-margin-bottom"><strong><?php echo $explained4; ?></strong></p>
                                        <p class="margin-one"><?php echo $explained5; ?></p>
                                    </div>
                                </div>
                                <div class="wide-separator-line no-margin-lr margin-ten"></div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <!-- end left part -->
                    <?php require_once './software_components/quote.php'; ?>
                    <!-- end right part -->
                </div>
            </div>
        </section>

        <?php
        require_once './site_components/footer.php';
        require_once './site_components/js.php';
        ?>
    </body>
</html>