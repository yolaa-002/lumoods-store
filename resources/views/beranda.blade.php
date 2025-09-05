<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Lumoods</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/css/bootstrap.min.css") }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/css/style.css") }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset("css/jquery.mCustomScrollbar.min.css") }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
    @include('header');
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li> --}}
                    {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li> --}}
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="banner_taital">Ezz Lumoods</h1>
                                <p class="banner_text">bikin hari lo tambah moods</p>
                                <div class="started_text"><a href="#">coming soon</a></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="banner_img"><img src="images/gambar1.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="banner_taital">Ezz Lumoods</h1>
                                <p class="banner_text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. The point of using Lorem
                                </p>
                                <div class="started_text"><a href="#">Order Now</a></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="banner_img"><img src="images/banner-img.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="banner_taital">Ice Cream</h1>
                                <p class="banner_text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. The point of using Lorem
                                </p>
                                <div class="started_text"><a href="#">Order Now</a></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="banner_img"><img src="images/banner-img.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="banner_taital">Ice Cream</h1>
                                <p class="banner_text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. The point of using Lorem
                                </p>
                                <div class="started_text"><a href="#">Order Now</a></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="banner_img"><img src="images/banner-img.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- about sectuion start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_img"><img src="images/beranda.png"></div>
                </div>
                <div class="col-md-6">
                    <h1 class="about_taital">Tentang Ezz Lumoods</h1>
                    <p class="about_text">Hari hari kamu gitu gitu aja?bosen sama keadaan yang bikin kamu jadi bete?Ezz
                        LUmoods hadir buat kamu yg bosen sama semuanya.
                        Ezz Lumoods adalah minuman susu dengan jelly terdisri dari barbagai rasa.Tanpa pengawet buatan,
                        tanpa pemanis buatan dan tidak menggunakan pewarna baju.
                        Yuk cobain semua varian Ezz Lumoods.
                    </p>
                    <div class="read_bt_1"><a href="tentang">baca</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about sectuion end -->
    <!-- cream sectuion start -->
    <div class="cream_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cream_taital">Menu Lumoods</h1>
                    <p class="cream_text"></p>
                </div>
            </div>
            <div class="cream_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img src="images/gambar1.png"></div>
                            <div class="price_text">Rp.7000</div>
                            <h6 class="strawberry_text">Es Lumoods rasa coklat</h6>
                            <div class="cart_bt"><a href="#">beli</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img src="images/gambar1.png"></div>
                            <div class="price_text">Rp.7000</div>
                            <h6 class="strawberry_text">Es Lumoods rasa coklat</h6>
                            <div class="cart_bt"><a href="#">beli</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img src="images/gambar1.png"></div>
                            <div class="price_text">Rp.7000</div>
                            <h6 class="strawberry_text">Es Lumoods rasa coklat</h6>
                            <div class="cart_bt"><a href="#">beli</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cream sectuion end -->
    <!-- services section start -->
      {{-- <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="services_taital">Our Ice Cream Services</h1>
                  <p class="services_text">tempor incididunt ut labore et dolore magna aliqua</p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="services_box">
                        <h5 class="tasty_text"><span class="icon_img"><img src="images/icon-1.png"></span>Cookies Ice Cream</h5>
                        <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat </p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="services_box">
                        <h5 class="tasty_text"><span class="icon_img"><img src="images/icon-2.png"></span>Cookies Ice Cream</h5>
                        <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat </p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="services_box">
                        <h5 class="tasty_text"><span class="icon_img"><img src="images/icon-1.png"></span>Cookies Ice Cream</h5>
                        <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fat </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="seemore_bt"><a href="#">Read More</a></div>
         </div>
      </div> --}}
      <!-- services section end -->
    <!-- testimonial section start -->
    
    <!-- testimonial section end -->

    {{-- gallery start --}}
    

    
    {{-- gallery end --}}
    <!-- contact section start -->
    @include('footer')
    <!-- contact section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html
                    Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset("public/js/jquery.min.js") }}"></script>
    <script src="{{ asset("public/js/popper.min.js") }}"></script>
    <script src="{{ asset("public/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("public/js/jquery-3.0.0.min.js") }}"></script>
    <script src="{{ asset("public/js/plugin.js") }}"></script>
    <!-- sidebar -->
    <script src="{{ asset("public/js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
    <script src="{{ asset("public/js/custom.js") }}"></script>
    <!-- javascript -->
</body>

</html>
