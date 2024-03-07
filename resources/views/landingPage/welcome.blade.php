<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpustakaan Digital</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
    <nav class="navbar navbar-expand-lg border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4"
        style="color: #5e72e4 !important">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                Perpustakaan Digital
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse " id="navigation">
                <ul class="navbar-nav mx-auto justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ route('signUp') }}">
                            <i class="fas fa-user-circle opacity-6 text-light me-1"></i>
                            Sign Up
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ route('signIn') }}">
                            <i class="fas fa-key opacity-6 text-light me-1"></i>
                            Sign In
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="d-flex w-100 align-items-center">
            <div class="w-100 w-md-50">
                <h2 class="text-primary pt-5">
                    <strong>Selamat Datang di Perpustakaan Digital!</strong>
                </h2>
                <span class="text-muted fs-6">
                    Kami menyambut Anda untuk menjelajahi keberagaman bahan perpustakaan digital online kami, 
                    termasuk jurnal, dan karya-karya referensi online lainnya. 
                    Setiap anggota E-Book yang telah memiliki nomor anggota yang sah berhak memanfaatkan layanan koleksi digital online kami. 
                    Bergabunglah dan nikmati akses mudah ke pengetahuan yang tak terbatas!</span>
                
            </div>
            <div class="w-100 w-md-50">
                <center>
                    <img src="{{ asset('assets/img/book1.png') }}" alt="" class="w-75">
                </center>
            </div>
        </div>
        <div class="d-flex w-100 align-items-center">
            <div class="w-100 w-md-50">
                <center>
                    <img src="{{ asset('assets/img/book-2.png') }}" alt="" class="w-75">
                </center>
            </div>
            <div class="w-100 w-md-50">
                <h2 class=" text-primary">
                    <strong>Tentang Kami</strong>
                </h2>
                <span class="text-muted fs-6">Perpustakaan Nasional melaksanakan tugas pemerintahan di bidang perpustakaan
                    sesuai dengan ketentuan peraturan perundang-undangan meliputi: <br><br>

                    menetapkan kebijakan nasional, kebijakan umum, dan kebijakan teknis pengelolaan perpustakaan;
                    melaksanakan pembinaan, pengembangan, evaluasi, dan koordinasi terhadap pengelolaan perpustakaan;
                    membina kerja sama dalam pengelolaan berbagai jenis perpustakaan; dan
                    mengembangkan standar nasional perpustakaan.
                </span>
            </div>
        </div>
    </div>

    <div class="w-100 mt-5 d-flex flex-column align-items-center">
        <h2>Fasilitas Kami</h2>
        <p>Fasilitas Perpustakan Wikrama</p>
    </div>

    <div class="w-100 container mb-5">
        <div class="row">
            <div class="col-4">
                <div class="w-100 h-100 p-2 border rounded d-flex align-items-center">
                    <img src="{{ url('assets/img/book-stack.png') }}" alt="" srcset=""
                        style="width: 40px; height: 40px;">
                    <div class="ms-3">
                        <h4>
                            ISBN
                        </h4>
                        <p>International Standard</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="w-100 h-100 p-2 border rounded d-flex align-items-center">
                    <img src="{{ url('assets/img/book-stack.png') }}" alt="" srcset=""
                        style="width: 40px; height: 40px;">
                    <div class="ms-3">
                        <h4>
                            ISBN
                        </h4>
                        <p>International Standard</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="w-100 h-100 p-2 border rounded d-flex align-items-center">
                    <img src="{{ url('assets/img/book-stack.png') }}" alt="" srcset=""
                        style="width: 40px; height: 40px;">
                    <div class="ms-3">
                        <h4>
                            ISBN
                        </h4>
                        <p>International Standard</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
