<p class="pull-right">
    <?php include('import.php')?>
    <?php include('menu_cetak.php')?>
</p>

<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
?>
<div class="row">
    <div class="col-md-8">
            <form method="post" action="<?php echo base_url('admin/anggaran_samsat') ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label>Tahun Anggaran :</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <select class="form-control" style="width: 100%;" name="tahun">
                            <option selected><?php echo $thn = date('Y');?></option>
                            <?php foreach ($tahunAnggaran as $row) {?>
                                <?php 
                                $selected = ''; 
                                if ($tahun == $row->tahun){
                                    $selected = 'selected';
                                } else {
                                    $selected = '';
                                } 
                                ?>
                                <option <?php echo $selected ?>><?php echo $row->tahun; ?></option>
                                <?php } ?> 
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" name="btn_search" id="btn_search">Cari</button>
                </div>
            </form>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-bordered" id="example1">
        <thead>
            <tr>
                <th>NO</th>
                <th>WILAYAH</th>
                <th>IWKBU</th>
                <th>IWKL</th>
                <th>TOTAL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($anggaran as $anggaran) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $anggaran->nama_samsat ?></td>
                <td>Rp.<?php echo number_format($anggaran->iwkbu,'0',',','.')?></td>
                <td>Rp.<?php echo number_format($anggaran->iwkl,'0',',','.')?></td>
                <td>Rp.<?php $hasil =
                        $anggaran->iwkbu + $anggaran->iwkl; 
                        echo number_format($hasil,'0',',','.')
                        ?></td>
                <td>
                    <a href="<?php echo base_url('admin/anggaran_samsat/edit/'.$anggaran->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>