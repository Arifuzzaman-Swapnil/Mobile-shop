<?php
    ob_start();
    // include header.php file
    include ('header.php');
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
include ('footer.php');
?>