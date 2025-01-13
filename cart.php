<?php
    include('php template/header.php');
?>
<?php
    
    count($product->getData('cart')) ? include('php template/shopping-cart.php') :  include ('php template/error/cart-error.php');
    count($product->getData('wishlist')) ? include ('php template/wishilist.php') :  include ('php template/error/wishlist-error.php');
    include('php template/new-phone.php');
    include('php template/ads-section.php');
    include('php template/blogs.php'); 
?>
<?php
    include('php template/footer.php');
?>