<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Galeri Produk</title>
      <!-- Bootstrap 4 CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif"/>
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      
      @include('header')

      <div class="container py-5">
         <div class="row mb-4">
            <div class="col text-center">
               <h1 class="h2 font-weight-bold">Galeri kami</h1>
               <p class="text-muted">galeri produk kami</p>
            </div>
         </div>

<div class="row">
   <!-- Galeri item -->
   <div class="col-md-3 mb-4">
      <div class="card">
         <img src="images/fotoproduk1.png" class="card-img-top" alt="Gallery Image 1" style="height:200px; object-fit:cover;">
      </div>
   </div>

   <div class="col-md-3 mb-4">
      <div class="card">
         <img src="images/fotoproduk3.jpg" class="card-img-top" alt="Gallery Image 2" style="height:200px; object-fit:cover;">
      </div>
   </div>

   <div class="col-md-3 mb-4">
      <div class="card">
         <img src="images/fotoproduk4.jpg" class="card-img-top" alt="Gallery Image 3" style="height:200px; object-fit:cover;">
      </div>
   </div>

   <div class="col-md-3 mb-4">
      <div class="card">
         <img src="images/fotoproduk5.jpg" class="card-img-top" alt="Gallery Image 4" style="height:200px; object-fit:cover;">
      </div>
   </div>

   <div class="col-md-3 mb-4">
      <div class="card">
         <img src="images/fotoproduk6.jpg" class="card-img-top" alt="Gallery Image 5" style="height:200px; object-fit:cover;">
      </div>
   </div>
</div>



         
      </div>

      <footer class="bg-dark text-white text-center py-3 mt-5">
         <p class="mb-0">2025 All Rights Reserved. Design by Free Html Templates</p>
      </footer>

      <!-- Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
