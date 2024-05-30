<?php 
require './config/koneksi.php';
include './inc/header.php'; 
?>
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



<section id="section-main" class="no-top" aria-label="section-menu">
    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Koleksi</h4>
                    <h1>Museum</h1>
                    <p class="mt-2">Lihat koleksi yang tersedia di Museum Samarinda yang menampilkan sejarah dan budaya yang mempesona dari Kalimantan Timur.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row g-4">
            <!-- Daftar Koleksi -->
            <?php
            $query = "SELECT * FROM koleksi";
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

        <!-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav> -->
    </div>
</section>

<script>
        // Tambahkan event listener untuk mengatur blur kartu
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseover', () => {
                document.querySelectorAll('.card').forEach(c => {
                    if (c !== card) {
                        c.classList.add('blur');
                    }
                });
                card.classList.remove('blur');
            });

            card.addEventListener('mouseout', () => {
                document.querySelectorAll('.card').forEach(c => {
                    c.classList.remove('blur');
                });
            });
        });
    </script>

<?php include './inc/footer.php'; ?>
