<?php require_once './administer.php'; ?>
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





        <section class="page-title parallax3 parallax-fix page-title-large">
            <div class="opacity-medium bg-black"></div>
            <img class="parallax-background-img" src="images/parallax-img20.jpg" alt="" />
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center animated fadeInUp">
                        <div class="separator-line bg-yellow no-margin-top margin-four"></div>
                        <!-- page title -->
                        <h1 class="white-text"><?php echo   $array_lang['gallery']['PROJECTS']; ?></h1>
                        <!-- end page title -->
                        <!-- page title tagline -->
                        <span class="white-text"><?php echo $array_lang['gallery']['Lorem']; ?></span>
                        <!-- end title tagline -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->
        <!-- portfolio section -->
        <section class="work-2col gutter work-with-title no-margin-top content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" >
                        <div class="text-center">
                            <!-- work filter -->
                            <ul class="portfolio-filter nav nav-tabs nav-tabs-light wow fadeInUp">
                                <li class="nav active"><a href="#" data-filter="*"><?php echo   $array_lang['gallery']['ALL']; ?></a></li>
                                  <?php
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $query_project_category, $array);
                    if (count($rows) > 0) :
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $Name = $value['Name'];
                            ?>
                                        <li class="nav"><a href=".magento<?php echo $id; ?>" data-filter=".magento<?php echo $id; ?>"><?php echo $Name; ?></a></li>
                                        <?php
                    endforeach;
                    endif;
                    ?>
                            </ul>
                            <!-- end work filter -->
                        </div>
                    </div>



                    <div class="col-md-12 grid-gallery overflow-hidden" >
                        <div class="tab-content">
                            <!-- work grid -->
                            <ul class="grid masonry-items">
                                <?php
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $query_pro, $array);
                    if (count($rows) > 0) :
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $Image = $value['Image'];
                            $Title = $value['Title'];
                            $Sub = $value['Sub'];
                            $project_category = $value['project_category'];
                    ?>
                                        <!-- work item ( external page ) -->
                                        <li class="magento<?php echo $id; ?>">
                                            <figure>
                                                <div class="gallery-img"><a href=""><img src="Public/projects/<?php echo $Image; ?>" alt=""></a></div>
                                                <figcaption>
                                                    <i class="icon-attachment"></i>
                                                    <h3><a href=""><?php echo $Title; ?></a></h3>
                                                    <p><?php echo  $project_category ; ?></p>
                                                </figcaption>
                                            </figure>
                                        </li>
                                  <?php
                    endforeach;
                    endif;
                    ?> 
                                <!-- end work item -->
                                <!-- work item ( lightbox gallery ) -->


                                <!-- end work item -->
                            </ul>
                            <!-- end work grid -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->


        <!-- new project -->
        <section class="new-project no-padding-top">
            <div class="container">
                <div class="row center-col text-center wow fadeInUp">
                    <div class="separator-line bg-yellow no-margin-top margin-five"></div>
                    <h5><?php echo $array_lang['gallery']['LOVE']; ?></h5>
                    <a class="btn highlight-button-black-border margin-four no-margin-bottom no-margin-lr" href="form.php"><?php echo $array_lang['gallery']['Start']; ?></a>
                </div>
            </div>
        </section>
        <!-- end new project -->




        <section class="no-padding">
            <div class="container-fluid bg-dark-gray">
                <div class="row">
                    <!-- banner -->
                    <div class="col-md-4 col-sm-12 no-padding"><a href="shop-with-sidebar.php"><img src="images/banner3.jpg" alt=""></a></div>
                    <!-- end banner -->
                    <!-- newsletter -->
                    <div class="col-md-4 col-sm-12 shop-newsletter-main">
                        <div class="shop-newsletter text-center">
                            <i class="icon-envelope medium-icon white-text margin-five no-margin-top"></i>
                            <p class="text-med text-uppercase letter-spacing-2 light-gray-text no-margin lg-display-block lg-margin-bottom-three">Address:22 riyad , ksa</p>
                            <p class="title-large font-weight-700 text-uppercase letter-spacing-2 white-text lg-display-none">9666889903</p>
                            <div class="center-col text-center icon-box">
                                <i class="fa fa-facebook i-extra-small-box i-rounded i-3d-border bg-yellow"></i>
                                <i class="fa fa-google i-extra-small-box i-rounded i-3d-border bg-yellow"></i>
                                <i class="fa fa-youtube i-extra-small-box i-rounded i-3d-border bg-yellow"></i>
                                <i class="fa fa-twitter i-extra-small-box i-rounded i-3d-border bg-yellow"></i>
                            </div>   </div>
                    </div>
                    <!-- end newsletter -->
                    <!-- banner -->
                    <div class="col-md-4 col-sm-12 no-padding"><a href="shop-with-sidebar.php"><img src="images/banner4.jpg" alt=""></a></div>
                    <!-- end banner -->
                </div>
            </div>
        </section>





        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14950931.386140963!2d54.10242879816012!3d23.81398535870867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2z2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2seg!4v1572233566600!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <?php require_once './site_components/footer.php'; ?>
        <!-- end footer -->
        <!-- javascript libraries / javascript files set #1 --> 
        <?php require_once './site_components/js.php'; ?>
    </body>
</html>