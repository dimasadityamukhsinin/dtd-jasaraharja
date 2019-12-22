<p class="pull-right">
    <div class="btn-group pull-right">
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
            <?php $no=1; foreach($inhu as $inhu) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $inhu->nopol ?></td>
                <td><?php echo $inhu->pemilik ?></td>
                <td><?php echo $inhu->alamat ?></td>
                <td><?php echo $inhu->no_telpon ?></td>
                <td><?php echo $inhu->kondisi ?></td>
                <td><?php echo $inhu->status ?></td>
                <td><?php echo $inhu->masa_awal ?></td>
                <td><?php echo $inhu->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($inhu->tarif,'0',',','.') ?></td>
                <td><?php $date = date("Y-m-d");
                        $akhir = $inhu->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $oustanding =  $inhu->tarif * $numBulan;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
                <td><?php echo $inhu->nama_regional ?></td>
                <td><?php echo $inhu->janji_bayar ?></td>
                <td><?php echo $inhu->tanggal_pelaksanaan ?></td>
                <td>
                    <?php if($inhu->ttd != null) { ?>
                        <img src="<?php echo base_url('assets/upload/image/'.$inhu->ttd)?>" class="img img-responsive img-thumbnail" width="60">
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>