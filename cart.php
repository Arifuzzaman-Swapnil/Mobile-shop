<?php
    include('php template/header.php');

    // Include necessary files and initialize the Product class
    require_once 'conn.php';
    require_once 'Products.php';

    // Create a database controller instance
    $db = new DBController();

    // Create a Product instance
    $product = new Product($db);
?>
<?php
    // Check and include templates based on conditions
    count($product->getData('cart')) 
        ? include('php template/shopping-cart.php') 
        : include('php template/error/cart-error.php');

    count($product->getData('wishlist')) 
        ? include('php template/wishilist.php') 
        : include('php template/error/wishlist-error.php');

    include('php template/new-phone.php');
    include('php template/ads-section.php');
    include('php template/blogs.php');
?>
<?php
    include('php template/footer.php');
?>
