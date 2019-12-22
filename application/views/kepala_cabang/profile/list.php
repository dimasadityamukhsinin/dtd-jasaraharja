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
    echo'<div class="alert alert-warning">';
    echo $error;
    echo '</div>';
}
// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form Open
echo form_open_multipart(base_url('kepala_cabang/profile'), 'class="form-horizontal"');


?>

<div class="form-group">
    <label class="col-md-2 control-label">Nama Kepala Cabang</label>
    <div class="col-md-5">
        <input type="text" name="nama" class="form-control" placeholder="Nama Kepala Cabang" value="<?php echo $profile->nama ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Cabang Riau</label>
    <div class="col-md-5">
        <input type="text" name="cabang" class="form-control" placeholder="Cabang Riau" value="<?php echo $profile->cabang ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Alamat</label>
    <div class="col-md-5">
        <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $profile->alamat ?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nomor Telpon</label>
    <div class="col-md-5">
        <input type="text" name="no_telpon" class="form-control" placeholder="Nomor Telpon" value="<?php echo $profile->no_telpon ?>" required>
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