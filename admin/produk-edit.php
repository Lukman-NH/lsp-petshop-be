<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Edit Produk</h4>
    </div>
        <div class="card-body">
         <?php 
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from produk where produk_id='$id'");
            while($d = mysqli_fetch_array($data)){
            ?>

            <form action="produk-edit-act.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="hidden" name="id" value="<?php echo $d['produk_id']; ?>">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama .."
                    value="<?php echo $d['produk_nama']; ?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga .."
                    value="<?php echo $d['produk_harga']; ?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control textarea" style="resize: none" rows="10">
                        <?php echo $d['produk_deskripsi']; ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Foto</label> <br>
                    <input type="file" name="foto">
                    
                    <?php if($d['produk_foto'] == ""){ ?>
                    <br>
                    Tidak ada Gambar
                    <?php }else{ ?>
                    <br>
                    <br>
                        <img src="../img/product/<?php echo $d['produk_foto'] ?>" style="width: 120px;height: auto">
                    <?php } ?>

                    <br/>
                    <small class="text-muted">Kosongkan Jika Tidak Ingin Mengubah Foto</small>

                </div>
                <hr>
                <button type="submit" class="btn btn-success btn-icon-split" name="submit">
                    <span class="text">Edit</span>
                </button>
            </form>
         <?php 
            }
            ?>

        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php 
    include 'template/footer.php';
?>