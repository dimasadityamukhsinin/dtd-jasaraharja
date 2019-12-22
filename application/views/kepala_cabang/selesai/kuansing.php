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
            <?php $no=1; foreach($kuansing as $kuansing) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $kuansing->nopol ?></td>
                <td><?php echo $kuansing->pemilik ?></td>
                <td><?php echo $kuansing->alamat ?></td>
                <td><?php echo $kuansing->no_telpon ?></td>
                <td><?php echo $kuansing->kondisi ?></td>
                <td><?php echo $kuansing->status ?></td>
                <td><?php echo $kuansing->masa_awal ?></td>
                <td><?php echo $kuansing->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($kuansing->tarif,'0',',','.') ?></td>
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
                <td><?php echo $kuansing->nama_regional ?></td>
                <td><?php echo $kuansing->janji_bayar ?></td>
                <td><?php echo $kuansing->tanggal_pelaksanaan ?></td>
                <td>
                    <?php if($kuansing->ttd != null) { ?>
                        <img src="<?php echo base_url('assets/upload/image/'.$kuansing->ttd)?>" class="img img-responsive img-thumbnail" width="60">
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>