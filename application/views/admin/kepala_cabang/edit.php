<p class="pull-left">
    <div class="btn-group">
        <a href="<?php echo base_url('admin/kepala_cabang')?>" title="Kembali" class="btn btn-info btn-md">
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
echo form_open_multipart(base_url('admin/kepala_cabang/edit/'.$kepala_cabang->id), 'class="form-horizontal"');
?>
<div class="form-group">
    <label class="col-md-2 control-label">Cabang</label>
    <div class="col-md-5">
        <input type="text" name="cabang" class="form-control" placeholder="Cabang" value="<?php echo $kepala_cabang->cabang ?>">
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Alamat</label>
    <div class="col-md-5">
        <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $kepala_cabang->alamat ?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Username</label>
    <div class="col-md-5">
        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $kepala_cabang->username ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nama</label>
    <div class="col-md-5">
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $kepala_cabang->nama ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nomor Telpon</label>
    <div class="col-md-5">
        <input type="text" name="no_telpon" class="form-control" placeholder="Nomor Telpon" value="<?php echo $kepala_cabang->no_telpon ?>">
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Jabatan</label>
    <div class="col-md-5">
        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo $kepala_cabang->jabatan ?>" required>
    </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-md-2 control-label">Level</label>
  <div class="col-md-5">
    <select name="level" class="form-control">
        <?php foreach($level as $level):?>
            <option value="<?= $level->id_level?>"
                <?php if ($level->id_level == $kepala_cabang->id_level) : ?> selected<?php endif; ?>
            >
                <?= $level->level?>
            </option>
        <?php endforeach; ?>
      </select>
  </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-md-2 control-label">Status</label>
  <div class="col-md-5">
    <select name="status" class="form-control">
        <option value="Aktif">Aktif</option>
        <option value="Nonaktif" <?php if($kepala_cabang->status=="Nonaktif") { echo "selected"; } ?> >Nonaktif</option>
    </select>
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