<p class="pull-left">
    <div>
        <a href="<?php echo base_url('staff/belum_diproses')?>" title="Kembali" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
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
            <?php $no=1; foreach($total_belum as $total_belum) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $total_belum->nopol ?></td>
                <td><?php echo $total_belum->pemilik ?></td>
                <td><?php echo $total_belum->alamat; 
                    if($total_belum->alamat != null) { ?>
                        <a href="https://www.google.com/maps/search/<?php echo $total_belum->alamat ?>" target="_blank" class="btn btn-info btn-xs" >
                        <i class="fa fa-map"></i> Lihat Alamat</a>
                    <?php }?>
                </td>
                <td><?php echo $total_belum->no_telpon ?></td>
                <td><?php echo $total_belum->kondisi ?></td>
                <td><?php echo $total_belum->status ?></td>
                <td><?php echo $total_belum->masa_awal ?></td>
                <td><?php echo $total_belum->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($total_belum->tarif,'0',',','.') ?></td>
                <td><?php echo $total_belum->nama_regional ?></td>
                <td><?php $date = date("Y-m-d");
                        $akhir = $total_belum->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $oustanding =  $total_belum->tarif * $numBulan;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
                <td>
                    <a href="<?php echo base_url('staff/belum_diproses/edit/'.$total_belum->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>