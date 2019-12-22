<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
?>

<?php
//Error Upload
if(isset($error)){
    echo'<p class="alert alert-warning">';
    echo $error;
    echo '</p>';
}

// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form Open
echo form_open_multipart(base_url('admin/konfigurasi'), 'class="form-horizontal"');
?>

<div class="form-group">
    <label class="col-md-2 control-label">Gambar Jasa Raharja</label>
    <div class="col-md-5">
        <input type="file" name="gambar" class="form-control" placeholder="Gambar Jasa Raharja" value="<?php echo $konfigurasi->nama_instansi ?>" required>
        Logo Lama : <img src="<?php echo base_url('assets/upload/image/'.$konfigurasi->gambar) ?>" class="img img-responsive img-thumbnail" width="200">
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-5">
        <button class="btn btn-success btn-lg" name="submit" type="submit">
            <i class="fa fa-save"></i> Simpan
        </button>
    </div>
</div>

<?php echo form_close(); ?>