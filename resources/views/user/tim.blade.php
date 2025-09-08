@extends('user.layout2')
@section('konten')
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
                    <img src="images/" class="card-img-top" alt="Team Member 1"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Anggota</h5>
                        <small class="text-muted">CEO</small>
                    </div>
                </div>
            </div>
            {{-- <div class="banner_img"><img src="images/faray.png"></div> --}}
            <!-- Team Member 2 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                    <img src="images/team2.jpg" class="team2_img" alt="Team Member 2"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Anggota</h5>
                        <small class="text-muted">Marketing</small>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                    <img src="images/team3.jpg" class="card-img-top" alt="Team Member 3"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Anggota</h5>
                        <small class="text-muted">Designer</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                    <img src="images/team3.jpg" class="card-img-top" alt="Team Member 3"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Anggota</h5>
                        <small class="text-muted">Designer</small>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm text-center" style="width: 250px; height: 350px; margin: auto;">
                    <img src="images/team4.jpg" class="card-img-top" alt="Team Member 4"
                        style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Anggota</h5>
                        <small class="text-muted">Developer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
@endsection
