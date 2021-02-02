
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card author-box card-primary">
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
                            <td>
                                <div class="form-group row mb-2">
                                    <label class="col-sm-12 col-md-12">Surat Pengantar/ Usulan dari Instansi</label>
                                </div>
                            </td>
                            <td>
                            <div class="col-sm-12">
                                    <input id="sp" type="file" name="sp" required="required">
                                    <button id="btnlanjut" type="submit" class="btn btn-primary">Upload</button>
                            </div>
                            </td>
                            </form>
                        </tr>
                    </tbody>
                    </table>
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
                        title: 'Mantap!',
                        message: 'Data berhasil disimpan',
                        position: 'center'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: 'data gagal disimpan, pastikan berkas yang diupload kurang dari 1 MB.',
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
    
</script>


