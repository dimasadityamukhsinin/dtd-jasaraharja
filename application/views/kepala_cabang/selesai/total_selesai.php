<p class="pull-left">
    <div>
        <a href="<?php echo base_url('kepala_cabang/selesai')?>" title="Kembali" class="btn btn-info btn-md">
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
                <th>OUTSTANDING</th>
                <th>REGIONAL</th>
                <th>JANJI BAYAR</th>
                <th>TANGGAL PELAKSANAAN</th>
                <th>TTD</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($selesai as $selesai) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $selesai->nopol ?></td>
                <td><?php echo $selesai->pemilik ?></td>
                <td><?php echo $selesai->alamat ?></td>
                <td><?php echo $selesai->no_telpon ?></td>
                <td><?php echo $selesai->kondisi ?></td>
                <td><?php echo $selesai->status ?></td>
                <td><?php echo $selesai->masa_awal ?></td>
                <td><?php echo $selesai->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($selesai->tarif,'0',',','.') ?></td>
                <td><?php $date = date("Y-m-d");
                        $akhir = $selesai->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $oustanding =  $selesai->tarif * $numBulan;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
                <td><?php echo $selesai->nama_regional ?></td>
                <td><?php echo $selesai->janji_bayar ?></td>
                <td><?php echo $selesai->tanggal_pelaksanaan ?></td>
                <td>
                    <?php if($selesai->ttd != null) { ?>
                        <img src="<?php echo base_url('assets/upload/image/'.$selesai->ttd)?>" class="img img-responsive img-thumbnail" width="60">
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>