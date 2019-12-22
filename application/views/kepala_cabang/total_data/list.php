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
                <th>TANGGAL PELAKSANAAN</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($total_data as $total_data) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $total_data->nopol ?></td>
                <td><?php echo $total_data->pemilik ?></td>
                <td><?php echo $total_data->alamat ?></td>
                <td><?php echo $total_data->no_telpon ?></td>
                <td><?php echo $total_data->kondisi ?></td>
                <td><?php echo $total_data->status ?></td>
                <td><?php echo $total_data->masa_awal ?></td>
                <td><?php echo $total_data->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($total_data->tarif,'0',',','.') ?></td>
                <td><?php echo $total_data->nama_regional ?></td>
                <td><?php $date = date("Y-m-d");
                        $akhir = $total_data->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $oustanding =  $total_data->tarif * $numBulan;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
                <td><?php echo $total_data->tanggal_pelaksanaan ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>