<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Edit User</h4>
    </div>
        <div class="card-body">
            <?php 
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from user where id_user='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
            <form method="post" action="user-edit-act.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Pelanngan</label>
                    <input type="hidden" name="id" value="<?php echo $d['id_user']; ?>">
                    <input type="text" class="form-control" name="nama" required="required" 
                    placeholder="Masukkan Nama .." value="<?php echo $d['nama']; ?>">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" required="required" 
                    placeholder="Masukkan Username .." value="<?php echo $d['username']; ?>">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" required="required" 
                    placeholder="Masukkan Phone .."value="<?php echo $d['phone']; ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password Baru..">
                  <small class="text-muted">Kosongkan jika tidak ingin mengganti password</small>
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