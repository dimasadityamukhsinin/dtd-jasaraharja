<p class="pull-right">
    <?php include('menu_cetak.php')?>
</p>

<p>
    <a href="<?php echo base_url('kasubag/sudah_diproses/tambah') ?>" class="btn btn-success btn-lg">
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
                <th>REGIONAL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>KOTA PEKANBARU</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/pekanbaru') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KOTA DUMAI</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/dumai') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KABUPATEN SIAK</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/siak') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KABUPATEN ROKAN HULU</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/rohul') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KABUPATEN ROKAN HILIR</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/rohIl') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KABUPATEN PELALAWAN</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/pelalawan') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KABUPATEN KUANTAN SINGIGI</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/kuansing') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KABUPATEN KAMPAR</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/kampar') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KABUPATEN INDRAGIRI HULU</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/inhu') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KABUPATEN INDRAGIRI HILIR</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/inhil') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>KABUPATEN BENGKALIS</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/bengkalis') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
            <tr>
                <td>TOTAL ON PROGRESS</td>
                <td>
                    <a href="<?php echo base_url('kasubag/sudah_diproses/total_sudah') ?>" class="btn btn-success btn-xs">
                    <i class="fa fa-eye"></i> Lihat</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>