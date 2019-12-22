<p>
    <a href="<?php echo base_url('admin/kepala_cabang/tambah') ?>" class="btn btn-success btn-lg">
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
                <th>CABANG</th>
                <th>ALAMAT</th>
                <th>USERNAME</th>
                <th>NAMA</th>
                <th>NOMOR TELPON</th>
                <th>JABATAN</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($kepala_cabang as $kepala_cabang) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $kepala_cabang->cabang ?></td>
                <td><?php echo $kepala_cabang->alamat ?></td>
                <td><?php echo $kepala_cabang->username ?></td>
                <td><?php echo $kepala_cabang->nama ?></td>
                <td><?php echo $kepala_cabang->no_telpon ?></td>
                <td><?php echo $kepala_cabang->jabatan ?></td>
                <td><?php echo $kepala_cabang->status ?></td>
                <td>
                    <a href="<?php echo base_url('admin/kepala_cabang/password/'.$kepala_cabang->id) ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Password</a>
                    <a href="<?php echo base_url('admin/kepala_cabang/edit/'.$kepala_cabang->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                    <?php include('delete.php') ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>