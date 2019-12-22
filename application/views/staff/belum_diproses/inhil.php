<p class="pull-right">
    <div class="btn-group pull-right">
        <a href="<?php echo base_url('staff/belum_diproses')?>" title="Kembali" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </div>
</p>

<p class="pull-right">
    <div class="btn-group ">
        <a href="<?php echo base_url('staff/belum_diproses/cetak_inhil')?>" title="Cetak" target="_blank" class="btn btn-success btn-lg">
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
            <?php $no=1; foreach($inhil as $inhil) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $inhil->nopol ?></td>
                <td><?php echo $inhil->pemilik ?></td>
                <td><?php echo $inhil->alamat; 
                    if($inhil->alamat != null) { ?>
                        <a href="https://www.google.com/maps/search/<?php echo $inhil->alamat ?>" target="_blank" class="btn btn-info btn-xs" >
                        <i class="fa fa-map"></i> Lihat Alamat</a>
                    <?php }?>
                </td>
                <td><?php echo $inhil->no_telpon ?></td>
                <td><?php echo $inhil->kondisi ?></td>
                <td><?php echo $inhil->status ?></td>
                <td><?php echo $inhil->masa_awal ?></td>
                <td><?php echo $inhil->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($inhil->tarif,'0',',','.') ?></td>
                <td><?php echo $inhil->nama_regional ?></td>
                <td><?php $date = date("Y-m-d");
                        $akhir = $inhil->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $oustanding =  $inhil->tarif * $numBulan;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
                <td>
                    <a href="<?php echo base_url('staff/belum_diproses/edit/'.$inhil->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>