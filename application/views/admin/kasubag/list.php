<p>
    <a href="<?php echo base_url('admin/kasubag/tambah') ?>" class="btn btn-success btn-lg">
        <i class="fa fa-plus"></i> Tambah Baru
    </a>
</p>

<?php if($cek_laporan != null) {
    include('delete_laporan.php');
} ?>


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
            <?php $no=1; foreach($kasubag as $kasubag) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $kasubag->cabang ?></td>
                <td><?php echo $kasubag->alamat ?></td>
                <td><?php echo $kasubag->username ?></td>
                <td><?php echo $kasubag->nama ?></td>
                <td><?php echo $kasubag->no_telpon ?></td>
                <td><?php echo $kasubag->jabatan ?></td>
                <td><?php echo $kasubag->nama_regional ?></td>
                <td><?php echo $kasubag->status ?></td>
                <td>
                    <a href="<?php echo base_url('admin/kasubag/password/'.$kasubag->id) ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Password</a>
                    <a href="<?php echo base_url('admin/kasubag/edit/'.$kasubag->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                    <?php include('delete.php') ?>
                    <?php if($cek_laporan == null) {
                        include('tambah_laporan.php'); 
                    } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>