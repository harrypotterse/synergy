<?php
require_once './administer.php';

$session->set_session_data("User", "User" . rand(1, 10000000000000000));
?>
<!doctype html>
<html class="no-js" lang="en" >
    <head>
        <?php require_once './site_components/css.php'; ?>
    </head>
    <body>
        <!-- navigation panel -->
        <?php require_once './site_components/navigation.php'; ?>
        <!-- end navigation panel -->
        <!-- slider -->

        <section id="slider" class="no-padding bg-white fashion-slider position-relative overflow-hidden">
            <div class="background-slider-text">
                <div class="container full-screen position-relative">
                    <div class="slider-typography">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">
                                <h1 class="white-text font-weight-400 margin-five no-margin-bottom"><span class="font-weight-600 letter-spacing-2"><?php echo $index->statement1; ?></span><br><?php echo $index->statement2; ?></h1>
                                <span class="starting text-med text-uppercase font-weight-600 letter-spacing-2 black-text margin-two bg-golden-yellow display-inline-block"><a href="contact"><?php echo $index->statement3; ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="owl-demo-background" class="owl-carousel owl-theme">
                <?php
                $rows = $class->sql_feth($Data_communication, $queryslider, $array);
                if (count($rows) > 0) :
                    foreach ($rows as $value):
                        $Link = $value['Link'];
                        ?>
                        <div class="item owl-bg-img full-screen" style="background-image:url('Public/slider/<?php echo $Link; ?>');"></div>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
        </section>
        <!-- end slider -->

        <!-- ###############################################################################################
#################################################################################################
#################################################################################################-->
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
        <!-- ###############################################################################################
        #################################################################################################
        #################################################################################################-->
        <section class="no-padding-bottom" style="padding-top:50px;">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <span class="title-med text-uppercase font-weight-600 letter-spacing-3 black-text display-block"><?php echo $index->statement4; ?></span>
                    </div>
                    <!-- end section title -->
                </div>
            </div>
            <div class="container-fluid">
                <div class="row margin-five no-margin-bottom">
                    <?php
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $queryservices, $array);
                    if (count($rows) > 0) :
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $Image = $value['Image'];
                            $Title = $value['Title'];
                            $Page = password_hash("services", PASSWORD_DEFAULT);
                            ?>
                            <div class="col-md-3 col-sm-6 no-padding travel-adventure overflow-hidden bg-black position-relative text-center">
                                <a href="sub-cat.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>&Title=<?php echo $Title; ?>"><img src="Public/services/<?php echo $Image; ?>" alt=""></a>
                                <figure class="text-large letter-spacing-3 white-text"><?php echo $Title; ?></figure>
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





        <!-- work process section -->
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
                                <i style="display: inline-flex;" ><img src="Public/icon/<?php echo $Icon; ?>" class="img-rounded img-responsive" alt="Cinque Terre"></i>
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





        <!-- portfolio section -->
        <section id="portfolio" class="grid-wrap work-4col margin-top-section no-margin-top  wow fadeIn" style="margin-top:0px!important;padding-bottom:55px;">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title no-padding-bottom"><?php echo $index->statement10; ?></h3>
                    </div>
                    <!-- end section title -->
                    <div class="col-md-5 col-sm-7 margin-three center-col text-center">
                        <h4 class="gray-text"><?php echo $index->statement11; ?>
                        </h4>
                    </div>
                    <div class="row lightbox-gallery">
                        <?php
                        $array = array();
                        $rows = $class->sql_feth($Data_communication, $queryprojects, $array);
                        if (count($rows) > 0) :
                            foreach ($rows as $value):
                                $id = $value['id'];
                                $Image = $value['Image'];
                                $Title = $value['Title'];
                                $Sub = $value['Sub'];
                                ?>
                                <div class="col-md-3 col-sm-6 wow fadeIn">
                                    <!-- photo item -->
                                    <a href="<?php echo $Image; ?>"><img src="Public/projects/<?php echo $Image; ?>" alt="" class="project-img-gallery"></a>
                                    <!-- end photo item -->
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="gallery.php" class="btn btn-black btn-small margin-four no-margin-bottom"><?php echo $index->statement12; ?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->





        <!-- ###############################################################################################
#################################################################################################
#################################################################################################-->


        <!-- features section -->
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
                                    <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class=""><img src="Public/our_selection/<?php echo $Icon; ?>" class="img-thumbnail" alt="Cinque Terre"></i></div>
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
        require_once './software_components/Contact.php';
        require_once './site_components/footer.php';
        require_once './site_components/js.php';
        ?>


    </body>
</html>