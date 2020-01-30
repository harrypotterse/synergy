<?php require_once 'administer.php'; ?>
<?php

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
        <!-- end navigation panel -->

        <!-- head section -->
        <section class="page-title parallax3 parallax-fix page-title-large page-title-shop">
            <div class="opacity-light bg-dark-gray"></div>
            <img class="parallax-background-img" src="images/parallax-img47.jpg" alt="" />
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 wow fadeIn">
                        <!-- page title tagline -->
                        <span class="text-uppercase white-text"><?php echo   $array_lang['about']['SYNERGY_EVENTS']; ?></span>
                        <!-- end title tagline -->
                        <!-- page title -->
                        <h1 class="white-text"><?php echo   $array_lang['about']['ABOUT_US']; ?></h1>
                        <!-- end page title -->
                    </div>
                    <div class="col-md-12 col-sm-12 breadcrumb text-uppercase margin-three no-margin-bottom wow fadeIn">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a class="white-text" href="index.php"><?php echo   $array_lang['about']['HOME']; ?></a></li>
                            <li class="white-text"><?php echo   $array_lang['about']['ABOUT_US']; ?></li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->







        <section style="background:#fff!important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <span class="text-large display-block"><?php echo $ABOUT->statement1; ?></span>
                        <span class="title-large text-uppercase letter-spacing-1 font-weight-600 black-text"><?php echo $ABOUT->statement2; ?></span>
                        <div class="separator-line-thick bg-fast-pink no-margin-lr"></div>
                        <p class="no-margin-bottom"><?php echo $ABOUT->statement3; ?></p>
                        <a class="highlight-button-black-border btn btn-small no-margin-bottom inner-link sm-margin-bottom-ten" href="#"><?php echo $ABOUT->statement4; ?></a>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center col-md-offset-1 xs-margin-bottom-ten"><img src="Public/ABOUT/<?php echo $ABOUT->statement5; ?>" class="xs-img-full" alt=""></div>
                    <div class="col-md-3 col-sm-6 text-center "><img src="Public/ABOUT/<?php echo $ABOUT->statement6; ?>" class="xs-img-full" alt=""></div>
                </div>
            </div>
        </section>






        <section class="portfolio-short-description no-padding-bottom" style="padding:30px 0px;">
            <div class="container-fluid" style="padding:0;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolio-short-description-bg pull-left" style="background-image:url('Public/VISION/<?php echo $VISION->statement4; ?>');">
                            <figure class="pull-right wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                                <figcaption>
                                    <div class="separator-line bg-yellow no-margin-lr margin-ten no-margin-top"></div>
                                    <h3 class="white-text"><?php echo $VISION->statement1; ?></h3>
                                    <p class="light-gray-text text-uppercase margin-seven text-med"><?php echo $VISION->statement2; ?></p>
                                    <p class="light-gray-text"><?php echo $VISION->statement3; ?></p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- ###############################################################################################
        #################################################################################################
        #################################################################################################-->




        <section id="about" class="border-bottom no-padding-bottom xs-onepage-section" style="background:#fff!important;">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center ">
                        <h3 class="section-title main-font no-padding margin-one no-margin-top gray-text letter-spacing-3"><?php echo $index->statement5; ?>
                        </h3>
                        <h1><?php echo $index->statement6; ?></h1>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row margin-ten">
                    <?php
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $queryevents, $array);
                    if (count($rows) > 0) :
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $Icon = $value['Icon'];
                            $Title = $value['Title'];
                            $Explanation = $value['Explanation'];
                            ?>
                            <div class="col-md-4 col-sm-4 text-center xs-margin-bottom-ten">
                                <i class="<?php echo $Icon; ?>"></i>
                                <span class="text-uppercase letter-spacing-2 black-text font-weight-600 display-block margin-ten no-margin-bottom xs-margin-top-five"><?php echo $Title; ?></span>
                                <p class="width-80 center-col margin-three"><?php echo $Explanation; ?></p>
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





        <section class="fix-background" style="background-image:url('images/onepage-landing-img3.jpg');">
            <div class="opacity-medium bg-black"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="white-text"><?php echo $index->statement7; ?><br><?php echo $index->statement8; ?></h1>
                        <a class="btn-small-white-background btn btn-medium inner-link no-margin-lr" href="form.php"><?php echo $index->statement9; ?></a>
                    </div>
                </div>
            </div>
        </section>




        <!-- ###############################################################################################
        #################################################################################################
        #################################################################################################-->





        <section id="features" class="features wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title"><?php echo $index->statement13; ?></h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row">

                    <div class="col-md-4 col-sm-12">
                        <?php
                        $array = array($array_culam[0], $array_culam[1]);
                        $rows = $class->sql_feth($Data_communication, $queryour_selection1, $array);
                        if (count($rows) > 0) :
                            foreach ($rows as $value):
                                $id = $value['id'];
                                $Title = $value['Title'];
                                $Icon = $value['Icon'];
                                $Explanation = $value['Explanation'];
                                ?>
                                <!-- features item -->
                                <div class="features-section col-md-12 col-sm-6 no-padding wow fadeInUp">
                                    <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class="<?php echo $Icon; ?>"></i></div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 no-padding text-left f-right">
                                        <h5><?php echo $Title; ?></h5>
                                        <div class="separator-line bg-yellow"></div>
                                        <p><?php echo $Explanation; ?></p>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <?php
                        $array = array($array_culam[2], $array_culam[3]);
                        $rows = $class->sql_feth($Data_communication, $queryour_selection2, $array);
                        if (count($rows) > 0) :
                            foreach ($rows as $value):
                                $id = $value['id'];
                                $Title = $value['Title'];
                                $Icon = $value['Icon'];
                                $Explanation = $value['Explanation'];
                                ?>
                                <!-- features item -->
                                <div class="features-section col-md-12 col-sm-6 no-padding wow fadeInUp">
                                    <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class="<?php echo $Icon; ?>"></i></div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 no-padding text-left f-right">
                                        <h5><?php echo $Title; ?></h5>
                                        <div class="separator-line bg-yellow"></div>
                                        <p><?php echo $Explanation; ?></p>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <?php
                        $array = array($array_culam[4], $array_culam[5]);
                        $rows = $class->sql_feth($Data_communication, $queryour_selection3, $array);
                        if (count($rows) > 0) :
                            foreach ($rows as $value):
                                $id = $value['id'];
                                $Title = $value['Title'];
                                $Icon = $value['Icon'];
                                $Explanation = $value['Explanation'];
                                ?>
                                <!-- features item -->
                                <div class="features-section col-md-12 col-sm-6 no-padding wow fadeInUp">
                                    <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class="<?php echo $Icon; ?>"></i></div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 no-padding text-left f-right">
                                        <h5><?php echo $Title; ?></h5>
                                        <div class="separator-line bg-yellow"></div>
                                        <p><?php echo $Explanation; ?></p>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>




        <!-- ###############################################################################################
        #################################################################################################
        #################################################################################################-->

        
        

        <section class="fix-background" style="background-image:url('Public/EVENT/<?php echo $JOIN->statement4; ?>');">
            <div class="opacity-full"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-4 col-sm-12 sm-margin-bottom-ten sm-text-center">
                        <h3 class="title-med no-padding-bottom letter-spacing-2"><?php echo $JOIN->statement1; ?></h3>
                        <p class="text-med text-white " style="color:#fff;"><?php echo $JOIN->statement2; ?>.</p>
                        <a class="highlight-button-dark btn btn-small button" href="#"><?php echo $JOIN->statement3; ?></a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-md-offset-2 text-center margin-three xs-margin-bottom-ten">
                        <i class="icon-profile-male medium-icon  display-block"></i>
                        <h1 class="font-weight-600 margin-five no-margin-bottom"><?php echo $array_lang['index']['JOIN']['TEAM']; ?>+</h1>
                        <p class="text-uppercase white-text letter-spacing-2 text-small margin-three"><?php echo $array_lang['index']['JOIN']['PEOPLE TEAM']; ?></p>
                    </div>
                    <div class="col-md-2 col-sm-4 text-center margin-three xs-margin-bottom-ten">
                        <i class="icon-global medium-icon  display-block"></i>
                        <h1 class="font-weight-600 margin-five no-margin-bottom"><?php echo $array_lang['index']['JOIN']['CLIENT_']; ?>+</h1>
                        <p class="text-uppercase  white-text letter-spacing-2 text-small margin-three"><?php echo $array_lang['index']['JOIN']['CLIENT']; ?></p>
                    </div>
                    <div class="col-md-2 col-sm-4 text-center margin-three">
                        <i class="icon-bargraph medium-icon  display-block"></i>
                        <h1 class="font-weight-600 margin-five no-margin-bottom"><?php echo $array_lang['index']['JOIN']['EVENT']; ?>+</h1>
                        <p class="text-uppercase white-text letter-spacing-2 text-small margin-three"><?php echo $array_lang['index']['JOIN']['EVENT BUILT']; ?></p>
                    </div>
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
