<?php
    include 'header.php';
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>PetsQu Shop</h2>
              <div class="breadcrumb__option">
                <a href="./index.html">Home</a>
                <span>Produk</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="row">
               <?php
                  include ('koneksi.php');
        
                  $data = mysqli_query($koneksi,"SELECT * from produk
                                        order by produk_id");
                  while($d = mysqli_fetch_array($data)){
                ?>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                   <div class="product__item__pic set-bg"
                        data-setbg="img/product/<?php echo $d['produk_foto'] ?>"
                   >
                        
                    <ul class="product__item__pic__hover">
                        <li>
                          <a href="produk-details.php?id=<?php echo $d['produk_id'] ?>"><i class="fa fa-info"></i></a>
                        </li>
                        <li>
                        <a href="checkout.php"><i class="fa fa-money"></i></a>
                        </li>
                    </ul>
                    </div>
                    <div class="product__item__text">
                    <h5><?php echo "Rp. ".number_format($d['produk_harga']).",-"; ?></h5>
                    </div>
                </div>
                </div>
              <?php 
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Section End -->

<?php
    include 'footer.php';
?>