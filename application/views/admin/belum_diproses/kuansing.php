<p class="pull-right">
    <div class="btn-group pull-right">
        <a href="<?php echo base_url('admin/belum_diproses')?>" title="Kembali" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </div>
</p>

<p class="pull-right">
    <div class="btn-group ">
        <a href="<?php echo base_url('admin/belum_diproses/cetak_kuansing')?>" title="Cetak" target="_blank" class="btn btn-success btn-lg">
            <i class="fa fa-print"></i> Cetak
        </a>
    </div>
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
                <th>NOMOR POLISI</th>
                <th>PEMILIK</th>
                <th>ALAMAT</th>
                <th>NOMOR TELPON</th>
                <th>KONDISI</th>
                <th>STATUS</th>
                <th>MASA BERLAKU AWAL</th>
                <th>MASA BERLAKU AKHIR</th>
                <th>TARIF</th>
                <th>REGIONAL</th>
                <th>OUTSTANDING</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($kuansing as $kuansing) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $kuansing->nopol ?></td>
                <td><?php echo $kuansing->pemilik ?></td>
                <td><?php echo $kuansing->alamat; 
                    if($kuansing->alamat != null) { ?>
                        <a href="https://www.google.com/maps/search/<?php echo $kuansing->alamat ?>" target="_blank" class="btn btn-info btn-xs" >
                        <i class="fa fa-map"></i> Lihat Alamat</a>
                    <?php }?>
                </td>
                <td><?php echo $kuansing->no_telpon ?></td>
                <td><?php echo $kuansing->kondisi ?></td>
                <td><?php echo $kuansing->status ?></td>
                <td><?php echo $kuansing->masa_awal ?></td>
                <td><?php echo $kuansing->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($kuansing->tarif,'0',',','.') ?></td>
                <td><?php echo $kuansing->nama_regional ?></td>
                <td><?php $date = date("Y-m-d");
                        $akhir = $kuansing->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $oustanding =  $kuansing->tarif * $numBulan;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
                <td>
                    <a href="<?php echo base_url('admin/belum_diproses/edit/'.$kuansing->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                    <?php include('delete_kuansing.php') ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>