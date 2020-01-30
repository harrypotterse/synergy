<?php require_once 'administer.php'; ?>
<?php
$a = new Achieve();
$pag = "products";
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
    header('Location: blog.php');
    exit();
endif;
if ($msg == TRUE) :
    $query = "select * from  products  where id = ? ";
    $array = array($id);
    $rows = $class->sql_feth($Data_communication, $query, $array);
    if (count($rows) > 0) :
        foreach ($rows as $value):
            $id = $value['id'];
            $Main = $value['Main'];
            $sub = $value['sub'];
            $Producer = $value['Producer'];
            $image = $value['image'];
            $image2 = $value['image2'];
            $image3 = $value['image3'];
            $explained = $value['explained'];
            $details = $value['details'];
            $instructions = $value['instructions'];
            $Dimensions = $value['Dimensions'];
            $Meta_Details = $value['Meta_Details'];
            $Meta_Keywords = $value['Meta_Keywords'];
            $Language = $value['Language'];
        endforeach;
    endif;
endif;
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
        <section class="content-top-margin page-title page-title-small border-bottom-light border-top-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7 breadcrumb text-uppercase wow fadeInUp xs-display-none" data-wow-duration="600ms">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">FURNITURE & ACCESSORIES</a></li>
                            <li>Chair</li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                    <div class="col-md-4 col-sm-5 wow fadeInUp header-nav text-right sm-margin-top-two" data-wow-duration="300ms">
                        <!-- end next/previous -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->
        <!-- content section -->
        <section>
            <div class="container">
                <div class="row">
                    <!-- product images -->
                    <div class="col-md-6 col-sm-12 zoom-gallery sm-margin-bottom-ten">
                        <a href="Public/products/p1/<?php echo $image; ?>"><img src="Public/products/p1/<?php echo $image; ?>" alt=""/></a>
                        <div class="products-thumb text-center">
                            <a href="Public/products/p2/<?php echo $image; ?>"><img src="Public/products/p2/<?php echo $image; ?>" alt=""/></a>
                            <a href="Public/products/p3/<?php echo $image; ?>"><img src="Public/products/p3/<?php echo $image; ?>" echo  alt=""/></a>
                        </div>
                    </div>
                    <!-- end product images -->
                    <div class="col-md-5 col-sm-12 col-md-offset-1">
                        <!-- product name -->
                        <span class="product-name-details text-uppercase font-weight-600 letter-spacing-2 black-text"><?php echo $Producer; ?></span>
                        <!-- end product name -->
                        <!-- product stock -->
                        <p class="text-uppercase letter-spacing-2 margin-two">In Stock / Shipping Available</p>
                        <!-- end product stock -->
                        <div class="separator-line bg-black no-margin-lr margin-five"></div>
                        <!-- product short description -->
                        <p><?php echo $explained; ?></p>
                        <!-- end product short description -->
                        <div>
                            <!-- product color -->
                            <div class="col-md-12 col-sm-12 no-padding margin-five">
                                <!-- add to bag button -->
                                <a class="highlight-button-dark btn btn-medium button pay"  Producer="<?php echo $Producer; ?>" id="<?php echo $id; ?>"  image="Public/products/p2/<?php echo $image; ?>" href="shop-cart.php"><i class="icon-basket"></i> Add To Cart</a>
                                <!-- end add to bag button -->
                            </div>
                        </div>
                    </div>
                </div>
        </section>




        <section class="border-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- tab -->
                        <div class="tab-style1">
                            <div class="col-md-12 col-sm-12 no-padding">
                                <!-- tab navigation -->
                                <ul class="nav nav-tabs nav-tabs-light text-left">
                                    <li class="active"><a href="#tab_sec1" data-toggle="tab">Details</a></li>
                                    <li><a href="#tab_sec2" data-toggle="tab"> Instructions</a></li>
                                    <li><a href="#tab_sec2" data-toggle="tab"> Dimensions</a></li>
                                </ul>
                                <!-- tab end navigation -->
                            </div>
                            <!-- tab content section -->
                            <div class="tab-content">
                                <!-- tab content -->
                                <div class="tab-pane med-text fade in active" id="tab_sec1">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <p><?php echo $details; ?></p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- tab content -->
                                <div class="tab-pane fade in" id="tab_sec2">
                                    <div class="row">

                                        <div class="col-md-6 col-sm-12 sm-margin-top-seven">
                                            <p><?php echo $instructions; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- tab content -->
                                <div class="tab-pane fade in" id="tab_sec3">
                                    <div class="row">

                                        <div class="col-md-6 col-sm-12 sm-margin-top-seven">
                                            <p><?php echo $Dimensions; ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->

                                <!-- end tab content -->
                            </div>
                            <!-- end tab content section -->
                        </div>
                        <!-- end tab -->
                    </div>
                </div>
            </div>
        </section>








        <section class="border-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">Related Products</h3>
                    </div>
                </div>
                <div class="row">
                    <!-- related products slider -->
                    <div id="shop-products" class="owl-carousel owl-theme dark-pagination owl-no-pagination owl-prev-next-simple">
                        <?php
                        $array = array();
                        $rows = $class->sql_feth($Data_communication, $query_products, $array);
                        if (count($rows) > 0) :
                            foreach ($rows as $value):
                                $id = $value['id'];
                                $Main = $value['Main'];
                                $sub = $value['sub'];
                                $Producer = $value['Producer'];
                                $image = $value['image'];
                                $image2 = $value['image2'];
                                $image3 = $value['image3'];
                                $explained = $value['explained'];
                                $details = $value['details'];
                                $instructions = $value['instructions'];
                                $Dimensions = $value['Dimensions'];
                                $Meta_Details = $value['Meta_Details'];
                                $Meta_Keywords = $value['Meta_Keywords'];
                                $Language = $value['Language'];
                                ?>
                                <div class="item">
                                    <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                        <a href="shop-single-product.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><img src="Public/products/p1/<?php echo $image; ?>" alt=""/></a>
                                        <span class="product-name text-uppercase"><a href="shop-single-product.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><?php echo $Producer; ?></a></span>
                                        <div class="quick-buy">
                                            <div class="product-share">
                                                <a   Producer="<?php echo $Producer; ?>" id="<?php echo $id; ?>"  image="Public/products/p1/<?php echo $image; ?>"  href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn pay" title="Add to Cart"><i  class="fa fa-shopping-cart "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>

                    </div>
                    <!-- end related products slider -->
                </div>
            </div>
        </section>
        <?php
        require_once './site_components/footer.php';
        require_once './site_components/js.php';
        ?>
    </body>

</html>

