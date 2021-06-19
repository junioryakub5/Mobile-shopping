<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carosel cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <!-- custom css file  -->
   
    <title>Mobile shopping</title>
    <?php 
      require("./database/DBcontroller.php");


    ?>
  </head>
  <body>
    <!-- start header  -->
    <header id="header">
      <div class="srip d-flex justify-content-between px-4 py-1 bg-light">
       <p class="font-rale font-size-14 text-black-50 m-0">junioryakub.jy@gmail.com</p>
       <div class="font-rale font-size-14">
           <a href="#" class="px-3 border-right border-left text-dark"> login</a>
           <a href="#" class="px-3 border-right border-left text-dark"> whishlist(0)</a>
       </div>
      </div>

      <!-- nav bar -->
      <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg font-size-16">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">MOBILE SHOPING</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item">
                  <a class="nav-link active">On sale</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">category <i class="fa fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">products <i class="fa fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">coming soon</a>
                </li>
              </ul>
              <form action="#">
                  <a href="#" class="py-2 rounded-pill color-primary-bg">
                      <span class="font-size-16 px-2 text-white">
                          <i class="fa fa-shopping-cart"></i>
                      </span>
                      <span class="py-2 px-3 rounded-pill text-dark bg-light">
                         0
                      </span>

                  </a>
              </form>
            </div>
          </div>
        </nav>

      <!-- nav bar -->


  </header>

  <!-- start header  -->



  <!-- start MAIN  -->
  <main id="main">