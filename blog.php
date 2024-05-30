<?php 
require './config/koneksi.php';
include './inc/header.php'; 
?> 

<section id="section-main" class="no-top" aria-label="section-menu" style="min-height: 100vh;">
    <!-- subheader -->
    <section id="subheader" class="no-bg mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Blog</h4>
                    <h1>Sejarah dan Budaya</h1>
                    <p class="mt-2">Baca artikel terbaru mengenai warisan budaya dan sejarah Provinsi Kalimantan Timur dan Kota Samarinda.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row g-4">
            <div class="container">
                <div class="row g-4">
                    <!-- Daftar Blog -->
                    <?php
                        $query = "SELECT * FROM blog";
                        $result = mysqli_query($koneksi, $query);

                        if(mysqli_num_rows($result) > 0) {
                            // Loop melalui setiap baris hasil query
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="d-items">
                                        <div class="card-image-1 mod-b" style="min-height: 50vh;">
                                            <a href="blog-post.php?id=<?php echo $row['id']; ?>" class="d-text">
                                                <div class="d-inner">
                                                    <span class="atr-date"><?php echo $row['date']; ?></span>
                                                        <?php
                                                        $judul = $row['title'];
                                                            if (strlen($judul) > 35) {
                                                                $judul = substr($judul, 0, 35) . "...";
                                                            }
                                                        ?>
                                                        <h3><?php echo $judul; ?></h3>

                                                        <?php
                                                            $description = $row['description'];
                                                            if (strlen($description) > 170) {
                                                                $description = substr($description, 0, 170) . "...";
                                                            }
                                                        ?>
                                                    <p><?php echo $description; ?></p>
                                                    <h5 class="d-tag"><?php echo $row['category']; ?></h5>
                                                </div>
                                            </a>
                                            <img src="./assets/images/blog/<?php echo $row['image_url']; ?>" class="img-fluid" alt="gambar_blog">
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>Tidak ada artikel tersedia.</p>";
                        }
                    ?>
                    <div class="clearfix"></div>

                    <!-- <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">

                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>

                        </ul>
                    </nav> -->

                </div>

            </div>
        </section>
        
        <?php include './inc/footer.php'; ?>