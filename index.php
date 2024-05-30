<?php 
require './config/koneksi.php';
include './inc/header.php'; 

?> 

<style>
    @media (min-width: 1200px) {
        .display-on-large {
            display: block;
        }
    }
    @media (max-width: 1199px) {
        .display-on-large {
            display: none;
        }
    }
</style>
<style>
        .card {
            border-radius: 2%;
            transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
            background-color: #322C2B;
            border-style: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
        }

        /* .card.blur {
            filter: blur(1px);
        } */

        .card:not(.blur):hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 1);
            background-color: #4F4A45;
            /* color: black; */
        }

        .btn-main {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-main:active {
            transform: scale(0.95);
        }
</style>

        <section class="no-top no-bottom jarallax vertical-center" data-video-src="https://www.youtube.com/watch?v=s_xHH7BEwok">
            <div class="de-overlay v-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 style="font-size: 2.4rem; letter-spacing: 0.2em;">MUSEUM<br>SAMARINDA</h1>
                            <p class="lead">Selamat datang di Museum Samarinda! <br> Museum Samarinda merupakan tempat yang menyimpan sejarah dan budaya Samarinda. Jangan lewatkan kesempatan untuk mengetahui sejarah Samarinda di Museum Samarinda.</p>
                            <a class="btn-main" href="koleksi.php"><span>Pelajari Lebih Lanjut</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="no-top no-bottom bg-color text-light">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .2)">
                        <div class="info-box padding20">
                            <i class="icon_clock_alt"></i>
                            <div class="info-box_text">
                                <div class="info-box_title">Jam Operasional</div>
                                <div class="info-box_subtite">Sabtu - Kamis : 08:30 - 12:00</div>
                                <div class="info-box_subtite">Jum'at : 08:30 - 11:00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .4)">
                        <div class="info-box padding20">
                            <i class="icon_house_alt"></i>
                            <div class="info-box_text">
                                <div class="info-box_title">Lokasi</div>
                                <div class="info-box_subtite">Jl. Bhayangkara No.1, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .6)">
                        <div class="info-box padding20">
                            <i class="icon_tag"></i>
                            <div class="info-box_text">
                                <div class="info-box_title">Harga Tiket</div>
                                <div class="info-box_subtite">Gratis</div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <section class="jarallax display-on-large" style="height: 50vh;">
            <img src="./assets/images/museum/lukisan3.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row gx-4">
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="" style="min-height: 100vh;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="spacer-double sm-hide"></div>
                            <img src="./assets/images/gallery/Museum.jpg" alt="" class="image-popup img-responsive wow fadeInUp" data-wow-duration="2s" style="border-radius: 20px;">
                        </div>
                        
                        <div class="col-lg-6 wow fadeIn">
                                <div class="padding20">
                                <h2 class="title mb10">TENTANG MUSEUM SAMARINDA
                                    <span class="small-border"></span>
                                </h2>

                                <p style="text-align: justify;">Museum Samarinda merupakan salah satu destinasi wisata yang memperkenalkan sejarah dan kebudayaan Kota Samarinda, Kalimantan Timur. 
                                    Museum Samarinda menampilkan berbagai koleksi budaya yang menarik. Mari jelajahi kekayaan budaya Kalimantan Timur di Museum Samarinda.</p>

                                <a href="koleksi.php" class="btn-line"><span>Selengkapnya</span></a>
                                
                                </div>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
        </section>

        <section class="jarallax" style="height: 50vh;">
            <img src="./assets/images/koleksi/alatmusik.jpg" class="jarallax-img" alt="">
            <div class="container">
            <div class="row gx-4">
            </div>
        </section>

        <!-- Koleksi -->
        <section id="section-main" class="no-top" aria-label="section-menu">
            <div class="container">
            <div class="row gx-4">
                    <div class="col-lg-12 text-center  mt-5">
                        <h2 class="title center">K O L E K S I
                            <span class="small-border"></span>
                        </h2>
                        
                    <div class="row g-4">
                    <!-- Daftar Koleksi -->
                    <?php
                    $query = "SELECT * FROM koleksi LIMIT 3";
                    $result = mysqli_query($koneksi, $query);

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="d-items">
                                    <div class="card" style="border-radius: 10px;">
                                        <div class="text-center m-4">
                                            <img src="./assets/images/koleksi/<?php echo $row['image_url']; ?>" class="img-fluid" alt="" style="max-width: 16rem; border-radius: 10px;">
                                            <?php
                                                        $judul = $row['title'];
                                                            if (strlen($judul) > 35) {
                                                                $judul = substr($judul, 0, 35) . "...";
                                                            }
                                                    ?>
                                                    <h4 class="mt-3"><?php echo $judul; ?></h4>
                                                    <?php
                                                        $description = $row['description'];
                                                            if (strlen($description) > 80) {
                                                                $description = substr($description, 0, 80) . "...";
                                                            }
                                                    ?>
                                                    <p style="text-align: justify;"><?php echo $description; ?></p>
                                            <div class="spacer10"></div>
                                            <a class="btn-main" data-bs-toggle="modal" data-bs-target="#scrollableModal<?php echo $row['id']; ?>">
                                                Lihat Detail
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div style="max-height: 75vh;" class="modal fade" id="scrollableModal<?php echo $row['id']; ?>" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="scrollableModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="scrollableModalLabel<?php echo $row['id']; ?>"><?php echo $row['title']; ?></h5>
                                    <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                                    </div>
                                    <div class="modal-body" style="text-align: center;">
                                    <img src="./assets/images/koleksi/<?php echo $row['image_url']; ?>" alt="gambar_koleksi" class="img-fluid" style="width: 75%;">
                                    <p class="mt-3" style="text-align: justify;"><?php echo $row['description']; ?></p>
                                    <p style="text-align: justify;"><?php echo $row['description_2']; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                    <a class="btn-main" data-bs-dismiss="modal">Tutup</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p>Tidak ada koleksi tersedia.</p>";
                    }
                    ?>
                </div>
                <div class="text-center mt-5">
                    <a href="koleksi.php" class="btn-line"><span>Lihat Semua</span></a>
                </div>
            </div>
        </section>

        <!-- <section class="jarallax" style="height: 50vh;">
            <img src="./assets/images/museum/galeri_museum.jpg" class="jarallax-img" alt="">
            <div class="container">
            <div class="row gx-4">
            </div>
        </section> -->

        <!-- Blog -->
        <section class="jarallax jarallax-img" style="min-height: 20vh; background-image: url('./assets/images/museum/galeri_museum.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12" data-bgcolor="rgba(0, 0, 0, 0.9)" style="justify-content: center; display: flex; flex-direction: column; align-items: center;">   
                            <div class="col-lg-12 wow fadeIn text-center">
                                <div class="padding20">
                                    <h2 class="title mb10">BELAJAR SEJARAH DI MUSEUM SAMARINDA
                                        <span class="small-border"></span>
                                    </h2>

                                    <p style="margin-right: 5%; margin-left: 5%;">
                                    Ingin tahu lebih banyak tentang sejarah Provinsi Kalimantan Timur dan Kota Samarinda? <br>
                                    Jangan lewatkan kesempatan untuk menggali lebih dalam tentang Kalimantan Timur dan Kota Samarinda. <br>
                                    Mari kunjungi Blog Museum Samarinda!
                                    </p>

                                    <a href="blog.php" class="btn-line"><span>Pelajari Lebih Lanjut</span></a>
                                </div>
                            </div>    
                    </div>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
        </section>

        <!-- Galeri -->
        <section class="">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 wow fadeIn">
                                <div class="padding20">
                                <h2 class="title mb10">G A L E R I
                                    <span class="small-border"></span>
                                </h2>

                                <p style="text-align: justify;">
                                    Temukan foto-foto menarik dari Museum Samarinda yang memuat berbagai koleksi dan tata letak 
                                    museum yang menarik.
                                </p>

                                <a href="gallery.php" class="btn-line"><span>Lihat</span></a>
                                
                                </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="spacer-double sm-hide"></div>
                            <img src="./assets/images/gallery/3.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="2s" style="border-radius: 20px; max-height: 18rem;">
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="spacer-double sm-hide"></div>
                            <img src="./assets/images/gallery/prasasti.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="2s" style="border-radius: 20px; max-height: 25rem;">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
        </section>
<?php include './inc/footer.php'; ?>