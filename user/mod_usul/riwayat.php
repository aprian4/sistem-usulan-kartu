<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php $id_user = $_SESSION['id_user']; ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Riwayat Usulan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th>Jenis Usulan</th>
                                <th>Tanggal Usulan</th>
                                <th>Status Usulan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = mysqli_query($koneksi,"select * from usulan where id_user = '$id_user'");
                                $no = 0;
                                while($usulan = mysqli_fetch_array($query)){
                                    $no++;
                            ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $no; ?>
                                </td>
                                <td><?php 
                                    if($usulan['jenis_usulan'] == "karpeg_baru"){ 
                                       echo "Kartu Pegawai Baru";
                                 }else if($usulan['jenis_usulan'] == "karpeg_pengganti"){
                                    echo "Kartu Pegawai Pengganti";
                                    } ?>

                                 </td>
                                <td><?php echo $usulan['tgl_usulan'];?></td>
                                <td>
                                <?php 
                                    if($usulan['status'] == 0 ||$usulan['status'] == 1 || $usulan['status'] == 2){ ?>
                                        <p><span class="badge badge-danger"></i>Usulan Belum Lengkap</span></p>

                                   <?php
                                    }else if($usulan['status'] == 3){ ?>
                                       <p><span class="badge badge-primary"></i>Usulan terkirim dan sedang diproses oleh BKPP</span></p>
                                <?php }else if($usulan['status'] == 4){ ?>
                                       <p><span class="badge badge-info"></i>Usulan sedang diproses oleh BKN Regional 3</span></p>
                                <?php }else if($usulan['status'] == 5){ ?>
                                       <p><span class="badge badge-warning"></i>Usulan disetujui dan dokumen bisa diambil di BKPP</span></p>
                                <?php } else if($usulan['status'] == 6){ ?>
                                       <p><span class="badge badge-success"></i>Selesai</span></p>
                                <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>