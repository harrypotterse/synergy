<?php
require_once '../FileConnection/Data_connection.php';
require_once '../Classes/Achieve.php';
require_once '../Classes/Session.php';
$session = new Session("login.php");
$a = new Achieve();
$ids= $session->get_session_data('id');
$limit = (intval($_GET['limit']) != 0 ) ? $_GET['limit'] : 3;
$offset = (intval($_GET['offset']) != 0 ) ? $_GET['offset'] : 0;
$sql = "SELECT * FROM products  WHERE 1 and sub = $ids   ORDER BY id ASC LIMIT $limit OFFSET $offset";
try {
    $stmt = $Data_communication->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
if (count($results) > 0) {
    foreach ($results as $value):
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
        $Page = password_hash("products", PASSWORD_DEFAULT);
        ?>
        <div class="col-md-4 col-sm-6">
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
}
?>
