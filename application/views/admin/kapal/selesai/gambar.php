<p class="pull-left">
    <div>
        <a href="<?php echo base_url('admin/selesai')?>" title="Kembali" class="btn btn-info btn-md">
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

//Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

//Form Open
echo form_open_multipart(base_url('admin/selesai/uploadImage/'.$selesai->id), 'class="form-horizontal"');
?>
<div class="form-group">
  <label class="col-md-2 control-label">Unggah Gambar</label>
    <div class="col-md-5">
        <input type="file" name="files[]" class="form-control" multiple="" required>
    </div>
    <div class="col md-2">
        <button class="btn btn-success btn-lg" name="submit" type="submit">
            <i class="fa fa-save"></i> Simpan
        </button>
    </div>
</div>

<?php echo form_close(); ?>

<?php
    //Notifikasi
    if($this->session->flashdata('sukses')){
        echo '<p class="alert alert-success">';
        echo $this->session->flashdata('sukses');
        echo '</div>';
    }
?> 
<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th>NO</th>
            <th>GAMBAR</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($gambar as $gambar) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td>
                <img src="<?php echo base_url('assets/upload/image/'.$gambar->foto)?>" class="img img-responsive img-thumbnail" width="200">
            </td>
            <td>
                    <?php include('delete_gambar.php') ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>