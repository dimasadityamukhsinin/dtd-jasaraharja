<p class="pull-left">
    <div>
        <a href="<?php echo base_url('admin/kapal/sudah_diproses')?>" title="Kembali" class="btn btn-info btn-md">
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
                <th>NAMA PERUSAHAAN</th>
                <th>PEMILIK</th>
                <th>ALAMAT</th>
                <th>NOMOR TELPON</th>
                <th>NAMA KAPAL</th>
                <th>KONDISI</th>
                <th>JUMLAH KAPAL</th>
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
            <?php $no=1; foreach($total_sudah as $total_sudah) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $total_sudah->nama_perusahaan ?></td>
                <td><?php echo $total_sudah->pemilik ?></td>
                <td><?php echo $total_sudah->alamat; 
                    if($total_sudah->alamat != null) { ?>
                        <a href="https://www.google.com/maps/search/<?php echo $total_sudah->alamat ?>" target="_blank" class="btn btn-info btn-xs" >
                        <i class="fa fa-map"></i> Lihat Alamat</a>
                    <?php }?>
                </td>
                <td><?php echo $total_sudah->no_telpon ?></td>
                <td><?php echo $total_sudah->nama_kapal ?></td>
                <td><?php echo $total_sudah->kondisi ?></td>
                <td><?php echo $total_sudah->jumlah_kapal ?></td>
                <td><?php echo $total_sudah->status ?></td>
                <td><?php echo $total_sudah->masa_awal ?></td>
                <td><?php echo $total_sudah->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($total_sudah->tarif,'0',',','.') ?></td>
                <td><?php echo $total_sudah->nama_regional ?></td>
                <td><?php $date = date("Y-m-d");
                        $akhir = $total_sudah->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $total =  $total_sudah->tarif * $numBulan;
                        $oustanding = $total_sudah->jumlah_kapal * $total;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
                <td>
                    <a href="<?php echo base_url('admin/kapal/sudah_diproses/edit/'.$total_sudah->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                    <?php include('delete.php') ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>