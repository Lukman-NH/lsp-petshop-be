<?php 
    include 'template/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data user</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th class="text-center" width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $data = mysqli_query($koneksi,"SELECT * from user");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <th><?php echo $d['id_user']; ?></th>
                            <th><?php echo $d['nama']; ?></th>
                            <th><?php echo $d['username']; ?></th>
                            <th><?php echo $d['phone']; ?></th>
                            <th><?php echo $d['role']; ?></th>
                            <th>
                                <div class="dropdown mb-4">
                                <button class="btn btn-info dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu animated--fade-in"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="user-edit.php?id=<?php echo $d['id_user'] ?>">Edit</a>
                                    <a class="dropdown-item" href="user-hapus.php?id=<?php echo $d['id_user'] ?>">Hapus</a>
                                </div>
                                </div>       
                            </th>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 
    include 'template/footer.php';
?>