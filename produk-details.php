<?php
    include 'header.php';
?>

 <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>Detail Produk</h2>
              <div class="breadcrumb__option">
                <a href="./index.html">Home</a>
                <span>Detail Produk</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->
<?php 
    $id_produk = mysqli_real_escape_string($koneksi, $_GET['id']);
    $data = mysqli_query($koneksi,"SELECT * from produk
                            WHERE produk_id='$id_produk'");

    while($d=mysqli_fetch_array($data)){
  ?>
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="product__details__pic">
              <div class="product__details__pic__item">
                <img
                  class="product__details__pic__item--large"
                  src="img/product/<?php echo $d['produk_foto'] ?>"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="product__details__text">
              <h3><?php echo $d['produk_nama']; ?></h3>
              <div class="product__details__price"><?php echo"Rp." .number_format($d['produk_harga']).",-"; ?></div>
              <p>
                <?php echo $d ['produk_deskripsi']; ?>
              </p>
              <a href="Checkout.php" class="primary-btn">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Details Section End -->
    <?php
    }
?>

<?php
    include 'footer.php';
?>