<p class="pull-left">
    <div class="btn-group">
        <a href="<?php echo base_url('admin/kasubag')?>" title="Kembali" class="btn btn-info btn-md">
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
echo form_open_multipart(base_url('admin/kasubag/edit/'.$kasubag->id), 'class="form-horizontal"');
?>
<div class="form-group">
    <label class="col-md-2 control-label">Cabang</label>
    <div class="col-md-5">
        <select name="cabang" class="form-control">
            <?php foreach($samsat as $samsat):?>
                <option value="<?= $samsat->nama_samsat?>"
                    <?php if ($samsat->nama_samsat == $kasubag->cabang) : ?> selected<?php endif; ?>
            >
                <?= $samsat->nama_samsat?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Alamat</label>
    <div class="col-md-5">
        <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $kasubag->alamat ?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Username</label>
    <div class="col-md-5">
        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $kasubag->username ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nama</label>
    <div class="col-md-5">
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $kasubag->nama ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nomor Telpon</label>
    <div class="col-md-5">
        <input type="text" name="no_telpon" class="form-control" placeholder="Nomor Telpon" value="<?php echo $kasubag->no_telpon ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Jabatan</label>
    <div class="col-md-5">
        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo $kasubag->jabatan ?>" required>
    </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-md-2 control-label">Regional</label>
  <div class="col-md-5">
    <select name="regional" class="form-control">
        <?php foreach($regional as $regional):?>
            <option value="<?= $regional->regional?>"
                <?php if ($regional->regional == $kasubag->regional) : ?> selected<?php endif; ?>
            >
                <?= $regional->nama_regional?>
            </option>
        <?php endforeach; ?>
      </select>
  </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-md-2 control-label">Level</label>
  <div class="col-md-5">
    <select name="level" class="form-control">
        <?php foreach($level as $level):?>
            <option value="<?= $level->id_level?>"
                <?php if ($level->id_level == $kasubag->id_level) : ?> selected<?php endif; ?>
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
        <option value="Nonaktif" <?php if($kasubag->status=="Nonaktif") { echo "selected"; } ?> >Nonaktif</option>
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