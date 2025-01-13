<?php

// require MySQL Connection
require ('conn.php');

// require Product Class
require ('productcode.php');

// require Cart Class
require ('cartcode.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );