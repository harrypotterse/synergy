<nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-white nav-border-bottom" role="navigation">
    <div class="container">
        <div class="row">
            <!-- logo -->
            <div class="col-md-2 pull-left"><a class="logo-light" href="index.php"><img alt=""style="max-width:200px!important;padding:8px;" src="images/logo-light.png" class="logo" /></a><a class="logo-dark" href="index.php"><img alt="" src="images/logo-light.png" class="logo" /></a></div>
            <!-- end logo -->
            <!-- search and cart  -->
            <div class="col-md-2 no-padding-left search-cart-header pull-right">
                <div id="top-search">
                    <!-- nav search -->
                    <a href="#search-header" class="header-search-form"><i class="fa fa-search search-button"></i></a>
                    <!-- end nav search -->
                </div>
                <div id="top-search">
                    <!-- nav search -->
                    <?php
                  QUERY_STRING();
                    if ($_SESSION['lang'] == "ar") {
                 
                        echo '<a href="" class="header-search-form"><i class="fa fa-globe search-button"></i> <a class="xx" href="?eng">English</a></a>';
                    } if ($_SESSION['lang'] == "eng") {
                       
                        echo '<a href="" class="header-search-form"><i class="fa fa-globe search-button"></i> <a class="xx" href="?ar">العربية</a></a>';
                    } elseif (!isset($_SESSION['lang'])) {
                         
                        echo '<a href="" class="header-search-form"><i class="fa fa-globe search-button"></i> <a class="xx" href="?ar">العربية</a></a>';
                    } else  {
                      
                    }
                    ?>

                    <!-- end nav search -->
                </div>
                <!-- search input-->
                <form id="search-header" method="post" action="#" name="search-header" class="mfp-hide search-form-result">
                    <div class="search-form position-relative">
                        <button type="submit" class="fa fa-search close-search search-button"></button>
                        <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                    </div>
                </form>
                <!-- end search input -->
                <div class="top-cart">
                    <!-- nav shopping bag -->
                    <a href="#" class="shopping-cart">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="subtitle">(<span id="num">0</span>) <?php echo   $array_lang['cart']['Items']; ?></div>
                    </a>
                    <!-- end nav shopping bag -->
                    <!-- shopping bag content -->
                    <div class="cart-content">
                        <ul class="cart-list">
                            <div id="cart"></div>
                         
                            
                        </ul>
                        <p class="total"><?php echo   $array_lang['cart']['Items']; ?>: <span class="amount">0</span></p>
                        <p class="buttons">
                            <a href="shop-cart.php" class="btn btn-very-small-white no-margin-bottom margin-seven pull-left no-margin-lr"><?php echo   $array_lang['cart']['View_Cart']; ?></a>
                        </p>
                    </div>
                    <!-- end shopping bag content -->
                </div>
            </div>
            <!-- end search and cart  -->
            <!-- toggle navigation -->
            <div class="navbar-header col-sm-8 col-xs-2 pull-right">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <!-- toggle navigation end -->
            <!-- main menu -->
            <div class="col-md-8 no-padding-right accordion-menu text-right">
                <div class="navbar-collapse collapse">
                    <ul id="accordion" class="nav navbar-nav navbar-right panel-group">
                        <!-- menu item -->
                        <li class=" panel">
                            <a href="index.php" class=" collapsed" ><?php echo $array_lang['index']['nav']['HOME']; ?> </a>
                        </li>
                        <li class=" panel">
                            <a href="about.php" class=" collapsed"><?php echo $array_lang['index']['nav']['ORDER']; ?> </a>
                        </li>
                        <!-- end menu item -->
                        <li class="dropdown panel simple-dropdown">
                            <a href="#collapse7" class="dropdown-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-hover="dropdown"> <?php echo $array_lang['index']['nav']['SERVICES']; ?> <i class="fa fa-angle-down"></i></a>
                            <!-- sub menu single -->
                            <!-- sub menu item  -->
                            <ul id="collapse7" class="dropdown-menu panel-collapse collapse" role="menu">
                                <?php
                                $array = array();
                                $rows = $class->sql_feth($Data_communication, $query_nav, $array);
                                if (count($rows) > 0) :
                                    foreach ($rows as $value):
                                        $id = $value['id'];
                                        $Title = $value['Title'];
                                        $Page = password_hash("services", PASSWORD_DEFAULT);
                                        ?>
                                        <li><a href="sub-cat.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>&Title=<?php echo  $Title ; ?>"><?php echo $Title; ?></a></li>
                                        <?php
                                    endforeach;
                                endif;
                                ?>

                            </ul>
                            <!-- end sub menu item  -->
                            <!-- end sub menu single -->
                        </li>
                        <li class=" panel">
                            <a href="gallery.php" class=" collapsed"> <?php echo $array_lang['index']['nav']['PROJECTS']; ?> </a>
                        </li>
                        <li class=" panel">
                            <a href="file.pdf" class=" collapsed"> <?php echo $array_lang['index']['nav']['PROFILE']; ?> </a>
                        </li>
                        <li class=" panel">
                            <a href="form.php" class=" collapsed"><?php echo $array_lang['index']['nav']['QUOTES']; ?></a>
                        </li>
                        <li class=" panel">
                            <a href="contact-us.php" class=" collapsed"><?php echo $array_lang['index']['nav']['CONTACT']; ?></a>
                        </li>
                        <!-- end menu item -->
                    </ul>
                </div>
            </div>
            <!-- end main menu -->
        </div>
    </div>
</nav>   
