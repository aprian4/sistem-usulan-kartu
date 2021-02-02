
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4>FORM PEMBUATAN KARTU PEGAWAI BARU</h4>
            </div>
            <div class="card-body">
                            <form id="form-karpeg_baru">

                                <?php 
                                    $id_user = $_SESSION['id_user'];
                                    $user = mysqli_fetch_array(mysqli_query($koneksi, "select * from user where id_user = '$id_user'"));

                                ?>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIP</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="nip" class="form-control" placeholder="<?php echo $user['nip']; ?>" disabled="true">
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="nama" class="form-control" placeholder="<?php echo $user['nama_user']; ?>" disabled="true">
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">OPD</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="opd" class="form-control" placeholder="<?php echo $user['opd']; ?>" disabled="true">
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Kontak/ HP</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="kontak" class="form-control" placeholder="Nomor Kontak/ HP" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="date" id="tgllahir" name="tgllahir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TMT CPNS</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="date" name="tmt_cpns" class="form-control" placeholder="TMT CPNS" required>
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
     $('#form-karpeg_baru').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'user/mod_karpeg/crud_karpeg.php',
        data: $(this).serialize(),
        success: function(data) {
          if (data == "ok") {
              iziToast.success({
                title: 'Berhasil!',
                message: 'Data Usulan Berhasil Disimpan',
                position: 'center'
              });
              setTimeout(function() {
                window.location.replace('?pg=upload');
              }, 500);
          }
          else {
            iziToast.error({
              title: 'Maaf,',
              message: 'Data Gagal disimpan, silahkan ulangi lagi',
              position: 'center'
            });
          }
        }
      });
      return false;
    });
    
</script>


