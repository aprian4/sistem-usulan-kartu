
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>FORM PEMBUATAN KARTU PEGAWAI PENGGANTI</h4>
            </div>
            <div class="card-body">
                            <form id="form-karpeg_pengganti">

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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo empty($user['tempat_lahir']) ? '' : $user['tempat_lahir'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" id="tgllahir" name="tgllahir" class="form-control" value="<?php echo empty($user['tgl_lahir']) ? '' : $user['tgl_lahir'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TMT CPNS</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="tmt_cpns" class="form-control" value="<?php echo empty($user['tmt_cpns']) ? '' : $user['tmt_cpns'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Kontak/ HP</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="kontak" class="form-control" value="<?php echo empty($user['kontak']) ? '' : $user['kontak'] ?>" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row mb-2">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                  <div class="col-sm-12 col-md-5">
                                    <label><b>*Pastikan data anda di atas sudah diisi dengan benar</b></label>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                    <center>
                                    <a href="user/mod_karpeg/crud_karpeg.php?pg=batal&jenis=karpeg_pengganti" class="btn btn-danger btn-lg mt-2">Batal</a>
                                    <button id="btnlanjut" type="submit" class="btn btn-primary btn-lg mt-2">Lanjut</button></center>
                                </div>
                            </form>
    </div>
</div>
</div>
</div>
<script>
     $('#form-karpeg_pengganti').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'user/mod_karpeg/crud_karpeg.php?pg=karpeg_pengganti',
        data: $(this).serialize(),
        success: function(data) {
          if (data == "ok") {
              iziToast.success({
                title: 'Berhasil!',
                message: 'Data Usulan Berhasil Disimpan',
                position: 'center'
              });
              setTimeout(function() {
                window.location.replace('?pg=upload_karpeg_pengganti');
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


