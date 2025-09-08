@extends('user.layout2')
@section('konten')
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="h2 font-weight-bold">Our Team</h1>
                <p class="text-muted">Kenalan sama tim kece Lumoods yukk!</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                    <img src="images/YOLI_CEO.png" class="card-img-top" alt="Team Member 1"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Yola Yulia Efendi</h5>
                        <small class="text-muted">CEO</small>
                    </div>
                </div>
            </div>
            {{-- <div class="banner_img"><img src="images/faray.png"></div> --}}
            <!-- Team Member 2 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                    <img src="images/FARA_HRD.png" class="card-img-top" alt="Team Member 1"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Fardila faradiba</h5>
                        <small class="text-muted">Human Resorce Department </small>
                    </div>
                </div>
            </div>
            

            <!-- Team Member 3 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                    <img src="images/WINDAH_CFO.png" class="card-img-top" alt="Team Member 3"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Septia Windi Astuti</h5>
                        <small class="text-muted">Chief Financial Officer</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                    <img src="images/Hapis.png" class="card-img-top" alt="Team Member 3"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Muhammad Hafizh Haryatama</h5>
                        <small class="text-muted">Digital Marketing</small>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                    <img src="images/BINTANG_ME.png" class="card-img-top" alt="Team Member 4"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Satrio Gemintang Mahameru</h5>
                        <small class="text-muted">Marketing Execute</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
@endsection
