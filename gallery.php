<?php 
require './config/koneksi.php';
include './inc/header.php'; 
?> 


<section id="section-main" class="no-top" aria-label="section-menu">
    <!-- subheader -->
    <section id="subheader" class="no-bg mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Galeri</h4>
                    <h1>Museum Samarinda</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row g-4">
                <div class="container">
                    <div id="gallery" class="row g-4">
                        <?php
                            $query = "SELECT * FROM gallery";
                            $result = mysqli_query($koneksi, $query);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-4 item">
                                        <div class="de-image-hover">
                                            <a href="./assets/images/gallery/<?php echo $row['image_url']; ?>" class="image-popup">
                                                <span class="dih-title-wrap">
                                                    <span class="dih-title"><?php echo $row['title']; ?></span>
                                                </span>
                                                <span class="dih-overlay"></span>
                                                <img src="./assets/images/gallery/<?php echo $row['image_url']; ?>" class="lazy img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "<p>Tidak ada item gallery tersedia.</p>";
                            }
                            ?> 
                    </div>
                </div>
            </section>
            
<?php include './inc/footer.php'; ?>