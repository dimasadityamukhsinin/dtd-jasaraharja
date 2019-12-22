<p class="pull-right">
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
            <?php $no=1; foreach($sudah_diproses as $sudah_diproses) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $sudah_diproses->nopol ?></td>
                <td><?php echo $sudah_diproses->pemilik ?></td>
                <td><?php echo $sudah_diproses->alamat; 
                    if($sudah_diproses->alamat != null) { ?>
                        <a href="https://www.google.com/maps/search/<?php echo $sudah_diproses->alamat ?>" target="_blank" class="btn btn-info btn-xs" >
                        <i class="fa fa-map"></i> Lihat Alamat</a>
                    <?php }?>
                </td>
                <td><?php echo $sudah_diproses->no_telpon ?></td>
                <td><?php echo $sudah_diproses->kondisi ?></td>
                <td><?php echo $sudah_diproses->status ?></td>
                <td><?php echo $sudah_diproses->masa_awal ?></td>
                <td><?php echo $sudah_diproses->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($sudah_diproses->tarif,'0',',','.') ?></td>
                <td><?php echo $sudah_diproses->nama_regional ?></td>
                <td><?php $date = date("Y-m-d");
                        $akhir = $sudah_diproses->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $oustanding =  $sudah_diproses->tarif * $numBulan;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
                <td>
                    <a href="<?php echo base_url('petugas/sudah_diproses/edit/'.$sudah_diproses->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>