
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Upload Persyaratan Pembuatan Kartu Pegawai Baru</h4>
            </div>
            <div class="card-body">
            <div class="table-responsiv">
                <table class="table table-striped table-sm" id="table-1">
                    <thead>
                        <tr>
                            <th>Nama Dokumen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <form id="form-suratpengantar">
                            <?php 
                                $id = $_SESSION['id_user'];
                                $jenis_usulan = "karpeg_baru";
                                $usulan = mysqli_fetch_array(mysqli_query($koneksi, "select * from usulan where id_user = '$id' and jenis_usulan='$jenis_usulan'"));
                                $idusulan = $usulan['id_usulan'];
                            ?>
                            <td style="width: 50%">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-12 col-md-12">Surat Pengantar/ Usulan dari Instansi<b> (Max. Ukuran File 2MB dan Format File .pdf)</b></label>
                                </div>
                            </td>
                            <?php
                                $namaberkas = "surat pengantar";
                                $jenisberkas = "karpeg_baru";
                                $queryberkas = mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$namaberkas'");
                                $upload = mysqli_fetch_array($queryberkas);
                                $cek_berkas = mysqli_num_rows($queryberkas);
                            ?>
                            <?php if ($cek_berkas > 0){ ?>
                                <td><a style="color:#fff" target="_blank" class="lihat btn btn-success btn-sm" href= "user/mod_karpeg/<?= $upload['path'] ?>" role="button"><i class="fas fa-eye"></i> Lihat</a>


                                    <a style="color:#fff" target="_blank" class="hapus btn btn-danger btn-sm" data-id="<?= $upload['id_berkas'] ?>" role="button"><i class="fas fa-times-circle"></i> Batal</a>
                            </td>
                            <?php } else { ?>
                            <td>
                            <div class="col-sm-12">
                                    <input id="sp" type="file" name="sp" required="required">
                                    <button id="btnlanjut" type="submit" class="btn btn-primary">Upload</button>
                            <?php } ?>
                            </div>
                            </td>
                            </form>
                        </tr>

                        <tr>
                            <form id="form-skcpns">
                            <td style="width: 50%">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-12 col-md-12">Scan Asli / Fotocopy Legalisir SK CPNS<b> (Max. Ukuran File 2MB dan Format File .pdf)</b></label>

                                </div>
                            </td>
                            <?php
                                $namaberkas = "SK CPNS";
                                $jenisberkas = "karpeg_baru";
                                $queryberkas = mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$namaberkas'");
                                $upload = mysqli_fetch_array($queryberkas);
                                $cek_berkas = mysqli_num_rows($queryberkas);
                            ?>
                            <?php if ($cek_berkas > 0){ ?>
                                <td><a style="color:#fff" target="_blank" class="lihat btn btn-success btn-sm" href= "user/mod_karpeg/<?= $upload['path'] ?>" role="button"><i class="fas fa-eye"></i> Lihat</a>


                                    <a style="color:#fff" target="_blank" class="hapus btn btn-danger btn-sm" data-id="<?= $upload['id_berkas'] ?>" role="button"><i class="fas fa-times-circle"></i> Batal</a>
                            </td>
                            <?php } else { ?>
                            <td>
                            <div class="col-sm-12">
                                    <input id="skcpns" type="file" name="skcpns" required="required">
                                    <button id="btnlanjut" type="submit" class="btn btn-primary">Upload</button>
                            <?php } ?>
                            </div>
                            </td>
                            </form>
                        </tr>

                        <tr>
                            <form id="form-skpns">
                            <td style="width: 50%">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-12 col-md-12">Scan Asli / Fotocopy Legalisir SK PNS<b> (Max. Ukuran File 2MB dan Format File .pdf)</b></label>
                                </div>
                            </td>
                            <?php
                                $namaberkas = "SK PNS";
                                $jenisberkas = "karpeg_baru";
                                $queryberkas = mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$namaberkas'");
                                $upload = mysqli_fetch_array($queryberkas);
                                $cek_berkas = mysqli_num_rows($queryberkas);
                            ?>
                            <?php if ($cek_berkas > 0){ ?>
                                <td><a style="color:#fff" target="_blank" class="lihat btn btn-success btn-sm" href= "user/mod_karpeg/<?= $upload['path'] ?>" role="button"><i class="fas fa-eye"></i> Lihat</a>


                                    <a style="color:#fff" target="_blank" class="hapus btn btn-danger btn-sm" data-id="<?= $upload['id_berkas'] ?>" role="button"><i class="fas fa-times-circle"></i> Batal</a>
                            </td>
                            <?php } else { ?>
                            <td>
                            <div class="col-sm-12">
                                    <input id="skpns" type="file" name="skpns" required="required">
                                    <button id="btnlanjut" type="submit" class="btn btn-primary">Upload</button>
                            <?php } ?>
                            </div>
                            </td>
                            </form>
                        </tr>

                        <tr>
                            <form id="form-sttpp">
                            <td style="width: 50%">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-12 col-md-12">Scan Asli / Fotocopy Legalisir STTPP (Surat Tanda Tamat Pendidikan dan Pelatihan) PRAJABATAN<b> (Max. Ukuran File 2MB dan Format File .pdf)</b></label>
                                </div>
                            </td>
                            <?php
                                $namaberkas = "STTPP";
                                $jenisberkas = "karpeg_baru";
                                $queryberkas = mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$namaberkas'");
                                $upload = mysqli_fetch_array($queryberkas);
                                $cek_berkas = mysqli_num_rows($queryberkas);
                            ?>
                            <?php if ($cek_berkas > 0){ ?>
                                <td><a style="color:#fff" target="_blank" class="lihat btn btn-success btn-sm" href= "user/mod_karpeg/<?= $upload['path'] ?>" role="button"><i class="fas fa-eye"></i> Lihat</a>


                                    <a style="color:#fff" target="_blank" class="hapus btn btn-danger btn-sm" data-id="<?= $upload['id_berkas'] ?>" role="button"><i class="fas fa-times-circle"></i> Batal</a>
                            </td>
                            <?php } else { ?>
                            <td>
                            <div class="col-sm-12">
                                    <input id="sttpp" type="file" name="sttpp" required="required">
                                    <button id="btnlanjut" type="submit" class="btn btn-primary">Upload</button>
                            <?php } ?>
                            </div>
                            </td>
                            </form>
                        </tr>

                        <tr>
                            <form id="form-foto">
                            <td style="width: 50%">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-12 col-md-12">Pas foto hitam putih ukuran 3x4 cm <b> (Max. Ukuran File 2MB dan Format File .jpg)</b></label>
                                </div>
                            </td>
                            <?php
                                $namaberkas = "FOTO";
                                $jenisberkas = "karpeg_baru";
                                $queryberkas = mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$namaberkas'");
                                $upload = mysqli_fetch_array($queryberkas);
                                $cek_berkas = mysqli_num_rows($queryberkas);
                            ?>
                            <?php if ($cek_berkas > 0){ ?>
                                <td><a style="color:#fff" target="_blank" class="lihat btn btn-success btn-sm" href= "user/mod_karpeg/<?= $upload['path'] ?>" role="button"><i class="fas fa-eye"></i> Lihat</a>


                                    <a style="color:#fff" target="_blank" class="hapus btn btn-danger btn-sm" data-id="<?= $upload['id_berkas'] ?>" role="button"><i class="fas fa-times-circle"></i> Batal</a>
                            </td>
                            <?php } else { ?>
                            <td>
                            <div class="col-sm-12">
                                    <input id="foto" type="file" name="foto" required="required">
                                    <button id="btnlanjut" type="submit" class="btn btn-primary">Upload</button>
                            <?php } ?>
                            </div>
                            </td>
                            </form>
                        </tr>


                    </tbody>
                    </table>
                    <form id="form-kirim">
                                <div class="form-group row mb-2">
                                    <div class="col-sm-12 col-md-12"><br><br>
                                        <input type="checkbox" name="checkbox" value="check" /> <b>*Dengan ini menyatakan bahwa data yang saya kirim ini merupakan data sebenar-benarnya.</b>
                                    </div>
                                </div>
                                <?php
                                $berkas1 = "surat pengantar";
                                $berkas2 = "SK CPNS";
                                $berkas3 = "SK PNS";
                                $berkas4 = "STTPP";
                                $berkas5 = "FOTO";
                                $jenisberkas = "karpeg_baru";
                                $cek1 = mysqli_num_rows(mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$berkas1'"));
                                $cek2 = mysqli_num_rows(mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$berkas2'"));
                                $cek3 = mysqli_num_rows(mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$berkas3'"));
                                $cek4 = mysqli_num_rows(mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$berkas4'"));
                                $cek5 = mysqli_num_rows(mysqli_query($koneksi, "select * from berkas where id_usulan='$idusulan' and jenis_berkas = '$jenisberkas' and nama_berkas = '$berkas5'"));
                            if(($cek1 > 0) && ($cek2 > 0) && ($cek3 > 0) && ($cek4 > 0) && ($cek5 > 0)){
                            ?>
                                <div class="form-group">
                                    <center><button id="btnkirim" type="submit" class="btn btn-primary btn-lg mt-2" 
                                    onclick="if(!this.form.checkbox.checked){alert('Silahkan klik checkbox sebelum menekan tombol kirim!');return false}">KIRIM USULAN</button></center>
                                </div>
                            <?php }else{ ?>
                                <div>
                                    <center><button type="submit" class="btn btn-primary btn-lg mt-2" 
                                    onclick="alert('Tombol akan aktif setelah semua berkas persyaratan diupload')" disabled="disabled">KIRIM USULAN</button></center>
                                </div>
                            <?php }?>

                            </form>
    </div>
</div>
</div>
</div>
</div>
<script>
      $('#form-suratpengantar').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'user/mod_karpeg/crud_upload.php?pg=suratpengantar',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {
                if (data == 'ok') {
                    $('#tambahdata').modal('hide');
                    iziToast.success({
                        title: 'Success!',
                        message: 'Data berhasil disimpan',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Gagal!',
                        message: 'Pastikan file kurang dari 2 MB, dan format file .pdf',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;


    });

      $('#form-skpns').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'user/mod_karpeg/crud_upload.php?pg=skpns',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {
                if (data == 'ok') {
                    $('#tambahdata').modal('hide');
                    iziToast.success({
                        title: 'Success!',
                        message: 'Data berhasil disimpan',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Gagal!',
                        message: 'Pastikan file kurang dari 2 MB, dan format file .pdf',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;


    });


      $('#form-sttpp').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'user/mod_karpeg/crud_upload.php?pg=sttpp',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {
                if (data == 'ok') {
                    $('#tambahdata').modal('hide');
                    iziToast.success({
                        title: 'Success!',
                        message: 'Data berhasil disimpan',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Gagal!',
                        message: 'Pastikan file kurang dari 2 MB, dan format file .pdf',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;


    });

    $('#form-foto').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'user/mod_karpeg/crud_upload.php?pg=foto',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {
                if (data == 'ok') {
                    $('#tambahdata').modal('hide');
                    iziToast.success({
                        title: 'Success!',
                        message: 'Data berhasil disimpan',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Gagal!',
                        message: 'Pastikan file kurang dari 2 MB, dan format file .jpg',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;


    });

    $('#form-skcpns').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'user/mod_karpeg/crud_upload.php?pg=skcpns',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {
                if (data == 'ok') {
                    $('#tambahdata').modal('hide');
                    iziToast.success({
                        title: 'Success!',
                        message: 'Data berhasil disimpan',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Gagal!',
                        message: 'Pastikan file kurang dari 2 MB, dan format file .pdf',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;


    });


      $('#table-1').on('click', '.hapus', function() {
        var id = $(this).data('id');
        console.log(id);
        swal({
            title: 'Apakah Anda yakin?',
            text: 'Akan menghapus data ini!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'user/mod_karpeg/crud_upload.php?pg=hapus',
                    method: "POST",
                    data: 'id_berkas=' + id,
                    success: function(data) {
                        iziToast.error({
                            title: '',
                            message: 'Data Berhasil dihapus',
                            position: 'center'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        })

    });

      $('#form-kirim').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'user/mod_karpeg/crud_upload.php?pg=kirim',
        data: $(this).serialize(),
        success: function(data) {
          if (data == "ok") {
              iziToast.success({
                title: 'Berhasil!',
                message: 'Data Usulan Berhasil Dikirim',
                position: 'center'
              });
              setTimeout(function() {
                window.location.replace('?pg=riwayat');
              }, 500);
          }
          else {
            iziToast.error({
              title: 'Maaf',
              message: 'Data Gagal Dikirim',
              position: 'center'
            });
          }
        }
      });
      return false;
    });
    
</script>
    
</script>


