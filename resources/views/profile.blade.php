<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/style.css" type="text/css">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Styling tambahan sesuai kebutuhan */
        .header {
            background-color: #f8fc0800;
            color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .header p {
            margin-bottom: 0;
        }

        .header .navbar {
            justify-content: space-between;
            padding: 0 20px;
        }

        .logo {
            display: inline-block;
            text-align: center;
            width: 100%;
        }

        .logo h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .logo p {
            margin: 5px 0;
        }

        .menu {
            display: inline-block;
            text-align: right;
        }

        .menu button {
            margin-top: 10px;
        }

        /* Menyesuaikan ukuran gambar tanpa mengubah proporsi */
        .img-thumbnail {
            max-width: 100%;
            max-height: 300px;
            width: auto;
            height: auto;
        }

        /* Tambahkan CSS untuk posisi tulisan "Selamat datang" */
        #selamatDatang {
            font-family: 'Oswald', sans-serif;
            font-size: 24px;
            margin-top: 10px;
            color: white; /* Ubah warna teks menjadi putih */
        }

        /* Tambahkan CSS untuk posisi tombol "Ganti Gambar" */
        #gantiGambar {
            margin-top: 20px; /* Ubah margin top agar terlihat jarak dengan teks "Selamat datang" */
        }

        /* Tambahkan CSS untuk posisi tombol "Hapus Akun" */
        .form-group.buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Style untuk tombol "Hapus Akun" */
        #hapusAkun {
            margin-top: 10px;
        }

        /* Background image */
        .bg-image {
            background-image: url('https://www.upload.ee/image/16308328/wp9738740-gymer-wallpapers.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

    </style>

</head>

<body class="bg-image">


    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./about-us.html">Exercise</a></li>
                <li><a href="./class-details.html">Nutrition</a></li>
                <li><a href="./team.html">Profile</a></li>
                <li><a href="#">Other</a>
                    <ul class="dropdown">
                        <li><a href="#">BMI Calculate</a></li>
                        <li><a href="{{ route('login') }}">Log In</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Log out') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="<?php echo url('gymlife'); ?>/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/exercise') }}">Exercise</a></li>
                            <li><a href="{{ url('/nutrisi') }}">Nutrition</a></li>
                            <li class="active"><a href="{{ url('/profile') }}">Profile</a></li>
                            <li><a href="#">Other</a>
                                @if (Route::has('login') || Route::has('register'))
                                    <ul class="dropdown">
                                        @auth
                                            <li><a href="{{ url('/bmi') }}">BMI Calculate</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('Log out') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form></li>
                                        @else
                                            <li><a href="{{ route('login') }}">Log In</a></li>
                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">Sign Up</a></li>
                                            @endif
                                        @endauth
                                    </ul>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo url('gymlife'); ?>/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Profile</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
                            <span href="{{ url('/profile') }}">Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <div class="container rounded">
        <div class="shadow-box rounded row-gap-3">
            <div class="text-center mt-5">
                <img
                    id="gambarUtama"
                    src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                    class="img-thumbnail rounded-circle"
                    alt="Gambar 1"
                />
            </div>
            <div class="text-center mt-3">
                <p id="selamatDatang">Selamat datang</p>
                <!-- Tambahkan input type file untuk mengganti gambar -->
                <input
                    type="file"
                    id="fileInput"
                    accept="image/*"
                    style="display: none"
                />
                <button id="gantiGambar" class="btn btn-secondary">
                    Ganti Gambar
                </button>
            </div>
        </div>
    </div>

    <!-- Script untuk ganti gambar profil -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Fungsi untuk mengganti gambar saat tombol diklik
            $("#gantiGambar").click(function () {
                // Klik input file saat tombol diklik
                $("#fileInput").click();
            });

            // Fungsi untuk menangani perubahan file pada input file
            $("#fileInput").change(function () {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        // Mengganti gambar dengan gambar yang baru diambil
                        $("#gambarUtama").attr("src", e.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>

    <!-- FORM -->
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group mt-3">
                        <label for="nama">Nama</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama"
                            placeholder="Masukkan nama Anda"
                        />
                    </div>
                    <div class="form-group mt-3">
                        <label for="beratBadan">Berat Badan (kg)</label>
                        <input
                            type="number"
                            min="1"
                            max="200"
                            class="form-control"
                            id="beratBadan"
                            placeholder="Masukkan berat badan Anda"
                        />
                    </div>
                    <div class="form-group mt-3">
                        <label for="tinggiBadan">Tinggi Badan (cm)</label>
                        <input
                            type="number"
                            min="1"
                            max="200"
                            class="form-control"
                            id="tinggiBadan"
                            placeholder="Masukkan tinggi badan Anda"
                        />
                    </div>

                    <div class="form-group mt-3">
                        <label for="tingkatKesulitan"
                            >Tingkat Kesulitan</label
                        >
                        <select
                            name="tingkatKesulitan"
                            id="tingkatKesulitan"
                            class="form-control"
                        >
                            <option value="beginner">Pemula</option>
                            <!-- Tambahkan opsi lain sesuai kebutuhan -->
                        </select>
                    </div>

                    <div class="form-group buttons">
                        <input
                            class="btn btn-primary mt-3"
                            type="submit"
                            value="Simpan"
                        />
                        <button id="hapusAkun" class="btn btn-danger mt-3">
                            Hapus Akun
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
