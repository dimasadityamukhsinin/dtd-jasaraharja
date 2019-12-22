<p class="pull-left">
    <div class="btn-group">
        <a href="<?php echo base_url('kasubag/belum_diproses')?>" title="Kembali" class="btn btn-info btn-md">
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
echo form_open_multipart(base_url('kasubag/belum_diproses/tambah'), 'class="form-horizontal"');
?>

<div class="form-group">
    <label class="col-md-2 control-label">Nomor Polisi</label>
    <div class="col-md-5">
        <input type="text" name="nopol" class="form-control" placeholder="Nomor Polisi" value="<?php echo set_value('nopol') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Pemilik</label>
    <div class="col-md-5">
        <input type="text" name="pemilik" class="form-control" placeholder="Pemilik" value="<?php echo set_value('pemilik') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">alamat</label>
    <div class="col-md-5">
        <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo set_value('alamat') ?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nomor Telpon</label>
    <div class="col-md-5">
        <input type="text" name="no_telpon" class="form-control" placeholder="Nomor Telpon" value="<?php echo set_value('alamat') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Kondisi</label>
    <div class="col-md-5">
        <input type="text" name="kondisi" class="form-control" placeholder="Kondisi" value="<?php echo set_value('kondisi') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Status</label>
    <div class="col-md-5">
        <input type="text" class="form-control" placeholder="Status" value="BELUM DIPROSES" readonly>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Masa Berlaku Awal</label>
    <div class="col-md-5">
        <input type="date" name="masa_awal" class="form-control" placeholder="Masa Berlaku Awal" value="<?php echo set_value('masa_awal') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Masa Berlaku Akhir</label>
    <div class="col-md-5">
        <input type="date" name="masa_akhir" class="form-control" placeholder="Masa Berlaku Akhir" value="<?php echo set_value('masa_akhir') ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Tarif</label>
    <div class="col-md-5">
        <input type="number" name="tarif" class="form-control" placeholder="Tarif" value="<?php echo set_value('tarif') ?>" required>
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
    <label class="col-md-2 control-label"></label>
    <div class="col-md-5">
        <button class="btn btn-success btn-lg" name="submit" type="submit">
            <i class="fa fa-save"></i> Simpan
        </button>
    </div>
</div>

<?php echo form_close(); ?>