<p>
    <a href="<?php echo base_url('admin/belum_diproses/tambah') ?>" class="btn btn-success btn-lg">
        <i class="fa fa-plus"></i> Tambah Baru
    </a>
</p>

<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
?>
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
                <td><?php echo $anggaran->iwkbu ?></td>
                <td><?php echo $anggaran->iwkl ?></td>
                <td>Rp.<?php $hasil =
                        $anggaran->iwkbu + $anggaran->iwkl; 
                        number_format($hasil,'0',',','.')
                        ?></td>
                <td>
                    <a href="<?php echo base_url('admin/belum_diproses/edit/') ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>