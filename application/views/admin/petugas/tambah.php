<p class="pull-left">
    <div class="btn-group">
        <a href="<?php echo base_url('admin/petugas')?>" title="Kembali" class="btn btn-info btn-md">
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
echo form_open_multipart(base_url('admin/petugas/tambah'), 'class="form-horizontal"');
?>

<div class="form-group">
    <label class="col-md-2 control-label">Cabang</label>
    <div class="col-md-5">
<<<<<<< HEAD
        <input type="text" name="cabang" class="form-control" placeholder="Cabang" value="<?php echo set_value('cabang') ?>" required>
=======
        <select name="cabang" class="form-control">
            <?php foreach($samsat as $samsat) { ?>
            <option value="<?php echo $samsat->nama_samsat ?>">
                <?php echo $samsat->nama_samsat ?>
            </option>
            <?php } ?>
        </select>
>>>>>>> a
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Alamat</label>
    <div class="col-md-5">
        <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo set_value('alamat') ?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Username</label>
    <div class="col-md-5">
        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Password</label>
    <div class="col-md-5">
        <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nama</label>
    <div class="col-md-5">
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo set_value('nama') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nomor Telpon</label>
    <div class="col-md-5">
        <input type="text" name="no_telpon" class="form-control" placeholder="Nomor Telpon" value="<?php echo set_value('no_telpon') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Jabatan</label>
    <div class="col-md-5">
        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo set_value('jabatan') ?>" required>
    </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-md-2 control-label">Regional</label>
  <div class="col-md-5">
    <select name="regional" class="form-control">
        <?php foreach($regional as $regional) { ?>
        <option value="<?php echo $regional->regional ?>">
            <?php echo $regional->nama_regional ?>
        </option>
        <?php } ?>
      </select>
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Level</label>
    <div class="col-md-5">
        <input type="text" class="form-control" placeholder="Level" value="PETUGAS" readonly>
    </div>
</div>


<div class="form-group">
    <label class="col-md-2 control-label">Status</label>
    <div class="col-md-5">
        <input type="text" class="form-control" placeholder="Status" value="AKTIF" readonly>
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