<p class="pull-left">
    <div class="btn-group">
        <a href="<?php echo base_url('kasubag/selesai')?>" title="Kembali" class="btn btn-info btn-md">
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
echo form_open_multipart(base_url('kasubag/selesai/edit/'.$selesai->id), 'class="form-horizontal"');
?>

<div class="form-group">
  <label class="col-md-2 control-label">Upload Tanda Tangan</label>
  <div class="col-md-5">
      <input type="file" name="foto" class="form-control" readonly>
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nomor Polisi</label>
    <div class="col-md-5">
        <input type="text" name="nopol" class="form-control" placeholder="Nomor Polisi" value="<?php echo $selesai->nopol ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Pemilik</label>
    <div class="col-md-5">
        <input type="text" name="pemilik" class="form-control" placeholder="Pemilik" value="<?php echo $selesai->pemilik ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Alamat</label>
    <div class="col-md-5">
        <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $selesai->alamat ?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nomor Telpon</label>
    <div class="col-md-5">
        <input type="text" name="no_telpon" class="form-control" placeholder="Nomor Telpon" value="<?php echo $selesai->no_telpon ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Kondisi</label>
    <div class="col-md-5">
        <input type="text" name="kondisi" class="form-control" placeholder="Kondisi" value="<?php echo $selesai->kondisi ?>" required>
    </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-md-2 control-label">Status</label>
  <div class="col-md-5">
    <select name="status" class="form-control">
        <option value="Selesai">Selesai</option>
        <option value="Belum Diproses" <?php if($selesai->status=="Belum Diproses") { echo "selected"; } ?> >Belum Diproses</option>
    </select>
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Masa Berlaku Awal</label>
    <div class="col-md-5">
        <input type="date" name="masa_awal" class="form-control" placeholder="Masa Berlaku Awal" value="<?php echo $selesai->masa_awal ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Masa Berlaku Akhir</label>
    <div class="col-md-5">
        <input type="date" name="masa_akhir" class="form-control" placeholder="Masa Berlaku Akhir" value="<?php echo $selesai->masa_akhir ?>" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Tarif</label>
    <div class="col-md-5">
        <input type="number" name="tarif" class="form-control" placeholder="Tarif" value="<?php echo $selesai->tarif ?>" required>
    </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-md-2 control-label">Regional</label>
  <div class="col-md-5">
    <select name="regional" class="form-control">
        <?php foreach($regional as $regional):?>
            <option value="<?= $regional->regional?>"
                <?php if ($regional->regional == $selesai->regional) : ?> selected<?php endif; ?>
            >
                <?= $regional->nama_regional?>
            </option>
        <?php endforeach; ?>
      </select>
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Janji Bayar</label>
    <div class="col-md-5">
        <input type="date" name="janji_bayar" class="form-control" placeholder="Janji Bayar" value="<?php echo $selesai->janji_bayar ?>">
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