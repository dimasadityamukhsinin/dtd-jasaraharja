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
echo form_open_multipart(base_url('admin/profile'), 'class="form-horizontal"');


?>

<div class="form-group">
    <label class="col-md-2 control-label">Nama Admin</label>
    <div class="col-md-5">
        <input type="text" name="nama" class="form-control" placeholder="Nama Admin" value="<?php echo $profile->nama ?>" required>
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