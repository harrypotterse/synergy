<footer>
    <div class="container footer-middle">
        <div class="row">
            <div class="col-md-3 col-sm-3 footer-link1 xs-display-none">
                <!-- headline -->
                <h5><?php echo $index->statement15; ?></h5>
                <!-- end headline -->
                <!-- text -->
                <p class="footer-text"><?php echo $footer->statement1; ?></p>
                <!-- end text -->
            </div>
            <div class="col-md-4 col-sm-3 col-xs-4 footer-link2 col-md-offset-1">
                <!-- headline -->
                <h5><?php echo $index->statement16; ?></h5>
                <!-- end headline -->
                <!-- link -->
                <ul>
                    <li><a href="#"><?php echo $array_lang['index']['footer']['TEL']; ?>:<?php echo $footer->statement2; ?></a></li>
                    <li><a href="#"><?php echo $array_lang['index']['footer']['Fax']; ?>:<?php echo $footer->statement3; ?></a></li>
                    <li><a href="#"><?php echo $array_lang['index']['footer']['Address']; ?>:<?php echo $footer->statement4; ?></a></li>
                    <li><a href=""><?php echo $array_lang['index']['footer']['Email']; ?>:<?php echo $footer->statement5; ?></a></li>
                </ul>
                <!-- end link -->
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4  footer-link3">
                <!-- headline -->

                <!-- end link -->
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4  footer-link4">
                <!-- headline -->
                <h5><?php echo $array_lang['index']['footer']['Services']; ?></h5>
                <!-- end headline -->
                <!-- link -->



                <ul>
                    <?php
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $query_services, $array);
                    if (count($rows) > 0) :
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $Image = $value['Image'];
                            $Title = $value['Title'];
                            $Language = $value['Language'];

                    ?>
                    <li><a href=""><?php echo  $Title ; ?></a></li>
                    <?php
                     endforeach;
                    endif;
                    ?>
                </ul>



                <!-- end link -->
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark-gray footer-bottom">
        <div class="container">
            <div class="row margin-three">
                <!-- copyright -->
                <div class="col-md-12 col-sm-12 col-xs-12 copyright text-center letter-spacing-1 xs-text-center xs-margin-bottom-one">
                    <?php echo $footer->statement6; ?>
                </div>
                <!-- end copyright -->
            </div>
        </div>
    </div>
    <!-- scroll to top -->
    <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!-- scroll to top End... -->
</footer>
