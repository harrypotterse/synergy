<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/bootstrap-hover-dropdown.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="js/skrollr.min.js"></script>  
<script type="text/javascript" src="js/smooth-scroll.js"></script>
<!-- jquery appear -->
<script type="text/javascript" src="js/jquery.appear.js"></script>
<!-- animation -->
<script type="text/javascript" src="js/wow.min.js"></script>
<!-- page scroll -->
<script type="text/javascript" src="js/page-scroll.js"></script>
<!-- easy piechart-->
<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
<!-- parallax -->
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<!--portfolio with shorting tab --> 
<script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
<!-- owl slider  -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!-- magnific popup  -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/popup-gallery.js"></script>
<!-- text effect  -->
<script type="text/javascript" src="js/text-effect.js"></script>
<!-- revolution slider  -->
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.revolution.js"></script>
<!-- counter  -->
<script type="text/javascript" src="js/counter.js"></script>
<!-- countTo -->
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<!-- fit videos  -->
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<!-- imagesloaded  -->
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<!-- hamburger menu-->
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/hamburger-menu.js"></script>
<!-- setting --> 
<script type="text/javascript" src="js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="Development/jquery.form.js" type="text/javascript"></script>
<script src="Development/form.js" type="text/javascript"></script>
<script>
    $('.xx').click(function () {
        //4 alert(1);
        location.reload();
    });
</script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>


<script>
display()
display_cart();
function display() {
   $.post('php/cart_add.php', {}, function (html) {
       var Job_Details = $(html).filter('span').text();
       var cart = $(html).filter('.li').html();
       $('#num').text(Job_Details);
       $('#cart').html(html);
       $('.amount').text(Job_Details);
   });
}
$(document).ready(function () {
   $('body').on('click', '.pay', function () {
       var image = $(this).attr('image');
       var Producer = $(this).attr('Producer');
       var id = $(this).attr('id');
       $.ajax({
           url: 'php/cart.php',
           method: "POST",
           data: {Producer: Producer, image: image, id: id},
           beforeSend: function () {
               $('#loader_image').show();
               $('#form_data').hide();
               $('#img').hide();
           },
           success: function (data) {
               if (data == 1) {
                   alertify.success('Item added to cart');
               } else if (data == 2) {
                   alertify.error('تم الاضافة الي السلة ');
               } else {
                   alertify.error('Error adding');
               }
               $.post('php/cart_add.php', {}, function (html) {
                   var Job_Details = $(html).filter('span').text();
                   var cart = $(html).filter('.li').html();
                   $('#num').text(Job_Details);
                   $('#cart').html(html);
                   $('.amount').text(Job_Details);
               });
               display_cart();
           }
       });
       return false;
   });

   $('body').on('click', '.remove', function () {
       var id = $(this).attr('id');
       $.ajax({
           url: 'php/del_cart.php',
           method: "POST",
           data: {id: id},
           beforeSend: function () {

           },
           success: function (data) {
               alertify.error('Item was deleted');
               display();
               display_cart();
           }
       });
       return false;


   });
});

function display_cart() {
   $.post('php/cart_view.php', {}, function (html) {
       $('#display_cart').html(html);

   });
}
</script>




</script>