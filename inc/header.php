<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Museum Samarinda</title>
    <link rel="icon" href="./assets/images/icon2.png" type="image/png" sizes="16x16" style="border-radius: 100%;">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Museum Samarinda adalah destinasi budaya yang menampilkan sejarah dan warisan lokal Samarinda. Kunjungi untuk melihat koleksi menarik yang ada di Museum Samarinda">
    <meta name="keywords" content="Museum Samarinda, sejarah Samarinda, koleksi, pameran budaya, destinasi wisata Samarinda, destinasi wisata kalimantan Timur">
    <meta name="author" content="Museum Samarinda">


    <!-- CSS Files
        ================================================== -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css" id="bootstrap">
    <link rel="stylesheet" href="./assets/css/plugins.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/color.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/style2.css">

    <!-- color scheme -->
    <link rel="stylesheet" href="./assets/css/colors/brown.css" type="text/css" id="colors">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

    <!-- Custom CSS to hide fixed elements during loading -->
    <style>
        body.loading .fixed-hide {
            display: none;
        }
    </style>
</head>

<body class="loading">
    <div class="preloader" id="preloader" style="z-index: 1000;">
        <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
            <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
        </svg>
        <div class="inner">
            <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
            <figure><img src="./assets/images/icon2.png" alt="Image"></figure>
            <small>MUSEUM SAMARINDA</small>
        </div>
    </div>
    <div id="wrapper">
        <!-- header begin -->
        <header class="header-fullwidth menu-expand transparent fixed-hide" style="position: fixed;">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-12">

                        <!-- small button begin -->
                        <div id="mo-button-open" class="mo-bo-s1">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <!-- small button close -->
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- menu overlay begin -->
        <div id="menu-overlay" class="slideDown">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-12">
                        <div id="mo-button-close" class="fixed-hide">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                        </div>

                        <div class="pt80 pb80" style="margin-top: 5rem;">
                            <div class="mo-nav text-center">
                                <ul id="mo-menu">
                                    <li><a href="index.php">Beranda</a></li>
                                    <li><a href="about.php">Tentang</a></li>
                                    <li><a href="koleksi.php">Koleksi</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="gallery.php">Galeri</a></li>
                                    <li><a href="lokasi.php">Lokasi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu overlay close -->

    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <!-- float text begin -->
        <div class="float-text fixed-hide">
            <div class="de_social-icons">
                <a href="https://www.facebook.com/museumsamarinda/"><i class="fa fa-facebook fa-lg"></i></a>
                <a href="https://www.instagram.com/museumkotasamarinda/"><i class="fa fa-instagram fa-lg"></i></a>
                <a href="https://www.youtube.com/@museumsamarinda"><i class="fa fa-youtube fa-lg"></i></a>
            </div>
            <span><a href="#">Museum Samarinda</a></span>
        </div>
        <!-- float text close -->
    </div>
    <!-- content close -->

    <!-- JavaScript to handle loading -->
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.body.classList.remove('loading');
                document.getElementById('preloader').style.display = 'none';
            }, 1000);
        });
    </script>

