<?php
    ob_start();
    // include header.php file
    include ('php template/header.php');
?>

<?php
    include('php template/banner-area.php'); 
    include('php template/top-sale.php'); 
    include('php template/special-price.php'); 
    include('php template/ads-section.php'); 
    include('php template/new-phone.php'); 
    include('php template/blogs.php'); 

?>


<?php
// include footer.php file
include ('php template/footer.php');
?>