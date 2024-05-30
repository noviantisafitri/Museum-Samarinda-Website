<?php 
require './config/koneksi.php';
include './inc/header.php'; 

// Ambil id dari parameter URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data blog berdasarkan id
    $query = "SELECT * FROM `blog` WHERE `id` = $id";
    $result = mysqli_query($koneksi, $query);

    // Cek apakah ada hasil dari query
    if(mysqli_num_rows($result) > 0) {
        // Ambil data blog
        $row = mysqli_fetch_assoc($result);

        // Ekstrak data
        $judul = $row['title'];
        $date = $row['date'];
        $category = $row['category'];
        $deskripsi = $row['description'];
        $deskripsi2 = $row['description_2'];
        $deskripsi3 = $row['description_3'];
        $gambar = $row['image_url'];
    } else {
        // Jika tidak ada data dengan id yang sesuai, beri pesan error
        $judul = "Artikel tidak ditemukan";
        $deskripsi = "Artikel yang Anda cari tidak tersedia.";
        $gambar = "";
    }
} else {
    // Jika parameter id tidak ditemukan, beri pesan error
    $judul = "Artikel tidak ditemukan";
    $deskripsi = "Artikel yang Anda cari tidak tersedia.";
    $gambar = "";
}
?>  

<!-- subheader -->


<section id="section-main" class="no-top" aria-label="section-menu">
    <section id="subheader" class="no-bg" style="margin-bottom: -8%;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <h1 style="font-size: 1.5rem;"><?php echo $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row g-5">
            <div class="col-md-10 offset-md-1">
                <div class="de-post-read">
                    <div class="post-content">
                        <div class="post-text text-center">
                            <img src="./assets/images/blog/<?php echo $gambar; ?>" alt="gambar_blog" class="mb-4" style="width: 75%; border-radius: 10px;">
                            <p style="text-align: justify;"><?php echo $deskripsi; ?></p>
                            <p style="text-align: justify;"><?php echo $deskripsi2; ?></p>
                            <p style="text-align: justify;"><?php echo $deskripsi3; ?></p>

                            <!-- <blockquote>test</blockquote></p> -->
                        </div>
                    </div>

                    <div class="post-meta">
                        <span>
                            <i class="fa fa-user id-color"></i>
                            By : <a href="#">Novianti Safitri</a>
                        </span> 
                        <span>
                            <i class="fa fa-calendar id-color"></i>
                            <a href="#"><?php echo $date; ?></a>
                        </span> 
                        <span>
                            <i class="fa fa-tag id-color"></i>
                            <a href="#"><?php echo $category; ?></a>
                        </span> 
                    </div>

                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
include './inc/footer.php'; 
?>  