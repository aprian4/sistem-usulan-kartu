 <?php 
    if(($user['tempat_lahir'] == null) || ($user['tgl_lahir'] == null) || ($user['tmt_cpns'] == null) || ($user['kontak'] == null)){
    include "user/form_data.php";
}else{
 ?>


 <?php 
    $id_user = $_SESSION['id_user'];
    $query = mysqli_query($koneksi, "select * from usulan where id_user = '$id_user' and jenis_usulan = 'karpeg_baru' and status = '1'");
    $cek1 = mysqli_num_rows($query);
    $query2 = mysqli_query($koneksi, "select * from usulan where id_user = '$id_user' and jenis_usulan = 'karpeg_baru' and status = '2'");
    $cek2 = mysqli_num_rows($query2);

    $query3 = mysqli_query($koneksi, "select * from usulan where id_user = '$id_user' and jenis_usulan = 'karpeg_pengganti' and status = '1'");
    $cek3 = mysqli_num_rows($query3);
    $query4 = mysqli_query($koneksi, "select * from usulan where id_user = '$id_user' and jenis_usulan = 'karpeg_pengganti' and status = '2'");
    $cek4 = mysqli_num_rows($query4);



if($cek1 > 0){?>
  <script>window.location.replace('?pg=karpeg_baru');</script>
<?php } else if($cek2 > 0){?>
  <script>window.location.replace('?pg=upload_karpeg');</script>
<?php } else if($cek3 > 0){ ?>
  <script>window.location.replace('?pg=karpeg_pengganti');</script>
<?php } else if($cek4 > 0){?>
  <script>window.location.replace('?pg=upload_karpeg_pengganti');</script>
<?php  }else {
 ?>
    
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Buat Usulan Baru</h4>
            </div>
            <div class="card-body">
                            <form id="form-jenis_usulan">
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Pelayanan</label>
                                    <div class="col-sm-12 col-md-6">
                                        <select class='form-control' name='jenis_usulan' required>
                                            <option value=''>Pilih Jenis usulan</option>
                                            <option value='karpeg_baru'>PEMBUATAN KARTU PEGAWAI BARU</option>
                                            <option value='karpeg_pengganti'>PEMBUATAN KARTU PEGAWAI PENGGANTI KARENA HILANG</option>
                                            <option value='karpeg_baru'>PEMBUATAN ID CARD BARU</option>
                                            <option value='karpeg_pengganti'>PEMBUATAN ID CARD PENGGANTI KARENA HILANG</option>
                                            <option value='karis_baru'>PEMBUATAN KARTU ISTRI</option>
                                            <option value='karis_pengganti'>PEMBUATAN KARTU ISTRI PENGGANTI KARENA HILANG</option>
                                            <option value='karsu_baru'>PEMBUATAN KARTU SUAMI BARU</option>
                                            <option value='karsu_pengganti'>PEMBUATAN KARTU SUAMI PENGGANTI KARENA HILANG</option>
                                            <option value='cltn'>CUTI DI LUAR TANGGUNGAN NEGARA (CLTN)</option>
                                            <option value='cltn'>MEMPERPANJANG CLTN</option>
                                            <option value='cltn_aktif'>PENGAKTIFAN KEMBALI SETELAH CLTN</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <center><button id="btnlanjut" type="submit" class="btn btn-primary btn-lg mt-2">Lanjut</button></center>
                                </div>
                            </form>
    </div>
</div>
</div>
</div>
<script>
     $('#form-jenis_usulan').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'user/mod_usul/crud_usulan.php',
        data: $(this).serialize(),
        success: function(data) {
          if (data == "karpeg_baru") {
              iziToast.success({
                title: 'Berhasil!',
                message: 'Data Usulan Berhasil Disimpan',
                position: 'center'
              });
              setTimeout(function() {
                window.location.replace('?pg=karpeg_baru');
              }, 500);
          } else if(data == "karpeg_pengganti"){
              iziToast.success({
                title: 'Berhasil!',
                message: 'Data Usulan Berhasil Disimpan',
                position: 'center'
              });
              setTimeout(function() {
                window.location.replace('?pg=karpeg_pengganti');
              }, 500);
          }else if(data == "karis_baru"){
              iziToast.success({
                title: 'Berhasil!',
                message: 'Data Usulan Berhasil Disimpan',
                position: 'center'
              });
              setTimeout(function() {
                window.location.replace('?pg=karis_baru');
              }, 500);
          }else if(data == "karis_pengganti"){
              iziToast.success({
                title: 'Berhasil!',
                message: 'Data Usulan Berhasil Disimpan',
                position: 'center'
              });
              setTimeout(function() {
                window.location.replace('?pg=karis_pengganti');
              }, 500);
          }
          else {
            iziToast.error({
              title: 'Maaf Bro',
              message: 'Data Gagal disimpan',
              position: 'center'
            });
          }
        }
      });
      return false;
    });
    
</script>

<?php } } ?>

