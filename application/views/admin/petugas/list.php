<p>
    <a href="<?php echo base_url('admin/petugas/tambah') ?>" class="btn btn-success btn-lg">
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
                <th>REGIONAL</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($petugas as $petugas) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $petugas->cabang ?></td>
                <td><?php echo $petugas->alamat ?></td>
                <td><?php echo $petugas->username ?></td>
                <td><?php echo $petugas->nama ?></td>
                <td><?php echo $petugas->no_telpon ?></td>
                <td><?php echo $petugas->jabatan ?></td>
                <td><?php echo $petugas->nama_regional ?></td>
                <td><?php echo $petugas->status ?></td>
                <td>
                    <a href="<?php echo base_url('admin/petugas/password/'.$petugas->id) ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Password</a>
                    <a href="<?php echo base_url('admin/petugas/edit/'.$petugas->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                    <?php include('delete.php') ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>