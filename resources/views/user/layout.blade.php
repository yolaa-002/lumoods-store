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
    <title>lumoods</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
    @include('user.header')
    <!-- banner section start -->
    @include('user.dashboard')
    <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- about sectuion start -->
    @include('user.about')
    <!-- about sectuion end -->
    <!-- cream sectuion start -->
    @include('user.produk')
    <!-- cream sectuion end -->
    <!-- services section start -->
    @include('user.pelayanan')
    <!-- services section end -->
    <!-- testimonial section start -->
    {{-- @include('user.testimoni') --}}
    <!-- testimonial section end -->
    <!-- contact section start -->
    {{-- @include('user.kontak') --}}
    {{-- @include('user.team') --}}
    <!-- contact section end -->
    <!-- copyright section start -->
    @include('user.footer')
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
</body>

</html>
