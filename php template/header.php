<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechHaven</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- owlcarousel cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- my css -->
    <link rel="stylesheet" href="style.css">

    <?php
      require('conn.php');
    ?>
</head>
<body>
  <!-- header section start-->
    <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-black bg-opacity-75 ">
                <p class="font-rale font-size-12 text-white m-0">Mobile Phone Price in Bangladesh 2025 at TechHaven</p>
                <div class="font-rale d-flex font-size-12 text-light">
                    <a href="#" class="px-1 border-right border-left"><button class="btn btn-outline-light btn-sm" type="submit">Login</button></a>
                    <a href="#" class="px-1 border-right border-left"><button class="btn btn-outline-light btn-sm" type="submit">Register</button></a>
                    
                </div>
            </div>

            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
              <div class="container-fluid m-auto">
                  <a class="navbar-brand align-text-middle font-rale font-size-18" href="#">
                    <img src="assets/Logo (2).jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-middle">
                    TechHaven
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">On Sale</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Company
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">IPhone</a></li>
                        <li><a class="dropdown-item" href="#">Samsumg</a></li>
                        <li><a class="dropdown-item" href="#">OnePlus</a></li>
                        <li><a class="dropdown-item" href="#">Xiaomi</a></li>
                        <li><a class="dropdown-item" href="#">Realme</a></li>
                        <li><a class="dropdown-item" href="#">Oppo</a></li>
                        <li><a class="dropdown-item" href="#">Vivo</a></li>
                        <li><a class="dropdown-item" href="#">Motorola</a></li>
                        <li><a class="dropdown-item" href="#">Itel</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Used Phone</a></li>
                      </ul>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Top 10
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Best Seller</a></li>
                        <li><a class="dropdown-item" href="#">Best Reviews</a></li>
                        <li><a class="dropdown-item" href="#">Best Ratings</a></li>
                        <li><a class="dropdown-item" href="#">Most Expensive</a></li>
                        <li><a class="dropdown-item" href="#">Less Expensive</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                  </form>
                 
                </div>
              </div>
            </nav>
            <!-- !Primary Navigation -->
    </header>
  <!-- header section end-->
     <!-- main section start-->
     <main id="main-site">