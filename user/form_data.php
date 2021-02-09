
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>SILAHKAN LENGKAPI DATA ANDA DI BAWAH INI SEBELUM MEMBUAT USULAN!</h4>
            </div>
            <div class="card-body">
                            <form id="form-form_data">

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
                                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="<?php echo empty($user['tempat_lahir']) ? '' : $user['tempat_lahir'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                                    <div class="col-sm-12 col-md-5">
                                    <?php 
                                        if(empty($user['tgl_lahir'])){?>
                                            <input type="date" name="tgllahir" class="form-control" placeholder="Tanggal Lahir" required>
                                    <?php  }else{
                                     ?>
                                        <input type="text" name="tgllahir" class="form-control" value="<?php echo $user['tgl_lahir'] ?>" required>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="jabatan" class="form-control" value="<?php echo empty($user['jabatan']) ? '' : $user['jabatan'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Eselon</label>
                                    <div class="col-sm-12 col-md-5">
                                    <?php 
                                    if(empty($user['eselon'])){?>
                                        <select class='form-control' name='eselon' required>
                                            <option value=''>Pilih</option>
                                            <option value='-'>Tidak Ada</option>
                                            <option value='II'>II</option>
                                            <option value='III'>III</option>
                                            <option value='IV'>IV</option>
                                        </select>                                    
                                    <?php  }else{
                                     ?>
                                        <input type="text" name="eselon" class="form-control" value="<?php echo $user['eselon'] ?>" required>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Golongan Darah</label>
                                    <div class="col-sm-12 col-md-5">
                                    <?php 
                                    if(empty($user['golongan_darah'])){?>
                                        <select class='form-control' name='golongan_darah' required>
                                            <option value=''>Pilih</option>
                                            <option value='A'>A</option>
                                            <option value='B'>B</option>
                                            <option value='AB'>AB</option>
                                            <option value='O'>O</option>
                                        </select>                                    
                                    <?php  }else{
                                     ?>
                                        <input type="text" name="golongan_darah" class="form-control" value="<?php echo $user['golongan_darah'] ?>" required>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TMT CPNS</label>
                                    <div class="col-sm-12 col-md-5">
                                    <?php 
                                        if(empty($user['tmt_cpns'])){?>
                                            <input type="date" name="tmt_cpns" class="form-control" placeholder="TMT CPNS" required>
                                    <?php  }else{
                                     ?>
                                        <input type="text" name="tmt_cpns" class="form-control" value="<?php echo $user['tmt_cpns'] ?>" required>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="alamat" class="form-control" value="<?php echo empty($user['alamat']) ? '' : $user['alamat'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Kontak/ HP</label>
                                    <div class="col-sm-12 col-md-5">
                                        <input type="text" name="kontak" class="form-control" value="<?php echo empty($user['kontak']) ? '' : $user['kontak'] ?>" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <center><button id="btnlanjut" type="submit" class="btn btn-primary btn-lg mt-2">Simpan Data</button></center>
                                </div>
                            </form>
    </div>
</div>
</div>
</div>
<script>
$('#form-form_data').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'user/crud_form_data.php',
        data: $(this).serialize(),
        success: function(data) {
          if (data == "ok") {
              iziToast.success({
                title: 'Berhasil!',
                message: 'Data Usulan Berhasil Disimpan',
                position: 'center'
              });
              setTimeout(function() {
                window.location.reload();
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


