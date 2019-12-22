<?php
// Notifikasi
if($this->session->flashdata('warning')) {
    echo '<p class="alert alert-warning">';
    echo $this->session->flashdata('warning');
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
echo form_open_multipart(base_url('kasubag/profile/password'), 'class="form-horizontal"');


?>

<div class="form-group">
    <label class="col-md-2 control-label">Masukkan Password Lama</label>
    <div class="col-md-5">
        <input type="password" name="pw_lama" class="form-control" placeholder="Masukkan Password Lama" value="<?php echo set_value('pw_lama') ?>" >
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Masukkan Password Baru</label>
    <div class="col-md-5">
        <input type="password" name="pw_baru" class="form-control" placeholder="Masukkan Password Baru" value="<?php echo set_value('pw_baru') ?>" >
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