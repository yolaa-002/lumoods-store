<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>team</title>
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
               <h1 class="h2 font-weight-bold">Our Team</h1>
               <p class="text-muted">Kenalan sama tim kece Lumoods!</p>
            </div>
         </div>

         <div class="row justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-md-3 col-sm-6 mb-4">
               <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                  <img src="images/team2.jpg" class="card-img-top" alt="Team Member 1" style="height:200px; object-fit:cover;">
                  <div class="card-body">
                     <h5 class="card-title mb-0">Nama Anggota</h5>
                     <small class="text-muted">CEO</small>
                  </div>
               </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-3 col-sm-6 mb-4">
               <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                  <img src="images/team2.jpg" class="card-img-top" alt="Team Member 2" style="height:200px; object-fit:cover;">
                  <div class="card-body">
                     <h5 class="card-title mb-0">Nama Anggota</h5>
                     <small class="text-muted">Marketing</small>
                  </div>
               </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-3 col-sm-6 mb-4">
               <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                  <img src="images/team3.jpg" class="card-img-top" alt="Team Member 3" style="height:200px; object-fit:cover;">
                  <div class="card-body">
                     <h5 class="card-title mb-0">Nama Anggota</h5>
                     <small class="text-muted">Designer</small>
                  </div>
               </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-md-3 col-sm-6 mb-4">
               <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                  <img src="images/team4.jpg" class="card-img-top" alt="Team Member 4" style="height:200px; object-fit:cover;">
                  <div class="card-body">
                     <h5 class="card-title mb-0">Nama Anggota</h5>
                     <small class="text-muted">Developer</small>
                  </div>
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
