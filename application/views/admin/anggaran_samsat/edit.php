<p class="pull-left">
    <div class="btn-group">
        <a href="<?php echo base_url('admin/anggaran_samsat')?>" title="Kembali" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </div>
</p>

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
echo form_open_multipart(base_url('admin/anggaran_samsat/edit/'.$anggaran->id), 'class="form-horizontal"');
?>
<div class="form-group">
    <label class="col-md-2 control-label">Wilayah</label>
    <div class="col-md-5">
        <input type="text" class="form-control" value="<?php echo $anggaran->nama_samsat ?>" readonly>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">IWKBU</label>
    <div class="col-md-5">
        <input type="number" name="iwkbu" class="form-control" placeholder="IWKBU" value="<?php echo $anggaran->iwkbu ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">IWKL</label>
    <div class="col-md-5">
        <input type="number" name="iwkl" class="form-control" placeholder="IWKL" value="<?php echo $anggaran->iwkl ?>" required>
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