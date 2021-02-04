<div class="section-header">
    <h1>Selamat Datang, <?= $user['nama_user'] ?></h1>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-tasks"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Usulan</h4>
                </div>
                <div class="card-body">
                    <?php 
                        $id_user = $_SESSION['id_user'];
                        $query = mysqli_query($koneksi, "select * from usulan where id_user = '$id_user' ");
                        $jumlah = mysqli_num_rows($query);
                        if($jumlah > 0){
                            echo $jumlah;
                        }else{
                            echo '0';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-check"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Usulan Selesai</h4>
                </div>
                <div class="card-body">
                    <?php 
                        $id_user = $_SESSION['id_user'];
                        $query = mysqli_query($koneksi, "select * from usulan where id_user = '$id_user' and status = '6'");
                        $jumlah = mysqli_num_rows($query);
                        if($jumlah > 0){
                            echo $jumlah;
                        }else{
                            echo '0';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-spinner"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Usulan Diproses</h4>
                </div>
                <div class="card-body">
                    <?php 
                        $id_user = $_SESSION['id_user'];
                        $query = mysqli_query($koneksi, "select * from usulan where id_user = '$id_user' and status = '3' or status = '4' or status = '5'");
                        $jumlah = mysqli_num_rows($query);
                        if($jumlah > 0){
                            echo $jumlah;
                        }else{
                            echo '0';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-times"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Usulan Belum Lengkap</h4>
                </div>
                <div class="card-body">
                    <?php 
                        $id_user = $_SESSION['id_user'];
                        $query = mysqli_query($koneksi, "select * from usulan where id_user = '$id_user' and status = '1' or status = '2'");
                        $jumlah = mysqli_num_rows($query);
                        if($jumlah > 0){
                            echo $jumlah;
                        }else{
                            echo '0';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>