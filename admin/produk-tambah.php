<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Tambah Produk</h4>
    </div>
        <div class="card-body">
            <form action="produk-tambah-act.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama ..">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" required="required" placeholder="Masukkan Harga ..">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control textarea" required="required" style="resize: none" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Foto</label> <br>
                    <input type="file" name="foto">
                </div>
                <hr>
                <button type="submit" class="btn btn-success btn-icon-split" name="submit">
                    <span class="text">Tambah</span>
                </button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php 
    include 'template/footer.php';
?>