<?php require_once 'administer.php'; ?>
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
                        <h1 class="black-text"><?php  echo $array_lang['contact']['contact_us']; ?></h1>
                        <!-- end page title -->
                    </div>
                    <div class="col-md-4 col-sm-12 breadcrumb text-uppercase wow fadeInUp xs-display-none" data-wow-duration="600ms">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="index.php"><?php echo $array_lang['contact']['HOME']; ?></a></li>
                            <li><?php  echo $array_lang['contact']['contact_us']; ?></li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->
        <section class="wow fadeIn cover-background" style="background-image:url('Public/contact/<?php echo $contact->statement6; ?>');">
            <div class="opacity-medium bg-dark-gray"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-5 col-sm-6 center-col text-center">
                        <p class="title-large text-uppercase letter-spacing-1 white-text font-weight-600"><?php echo $contact->statement1; ?></p>
                        <a class="btn-small-white btn btn-medium inner-link" href="#contact"><?php echo $contact->statement2; ?></a>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once './software_components/Contact.php'; ?>
        <!-- end content section -->
        <div class=" bg-white footer-top">
            <div class="container">
                <div class="row margin-four">
                    <!-- phone -->
                    <div class="col-md-4 col-sm-4 text-center"><i class="icon-phone small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom"><?php echo $contact->statement3; ?></h6></div>
                    <!-- end phone -->
                    <!-- address -->
                    <div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom"><?php echo $contact->statement4; ?></h6></div>
                    <!-- end address -->
                    <!-- email -->
                    <div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope small-icon black-text"></i><h6 class="margin-two no-margin-bottom"><a href="mailto:<?php echo $contact->statement5; ?>" class="black-text"><?php echo $contact->statement5; ?></a></h6></div>
                    <!-- end email -->
                </div>
            </div>
        </div>
        <?php require_once './site_components/footer.php'; ?>
        <!-- end footer -->
        <!-- javascript libraries / javascript files set #1 --> 
        <?php require_once './site_components/js.php'; ?>

    </body>
</html>