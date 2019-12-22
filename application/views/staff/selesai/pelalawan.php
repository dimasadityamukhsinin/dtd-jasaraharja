<p class="pull-right">
    <div class="btn-group pull-right">
        <a href="<?php echo base_url('staff/selesai')?>" title="Kembali" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </div>
</p>

<p class="pull-right">
    <div class="btn-group ">
        <a href="<?php echo base_url('staff/selesai/cetak_pelalawan')?>" title="Cetak" target="_blank" class="btn btn-success btn-lg">
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
                <th>OUTSTANDING</th>
                <th>REGIONAL</th>
                <th>JANJI BAYAR</th>
                <th>TANGGAL PELAKSANAAN</th>
                <th>TTD</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($pelalawan as $pelalawan) { ?>
            <tr>
            <td><?php echo $no++ ?></td>
                <td><?php echo $pelalawan->nopol ?></td>
                <td><?php echo $pelalawan->pemilik ?></td>
                <td><?php echo $pelalawan->alamat; 
                    if($pelalawan->alamat != null) { ?>
                        <a href="https://www.google.com/maps/search/<?php echo $pelalawan->alamat ?>" target="_blank" class="btn btn-info btn-xs" >
                        <i class="fa fa-map"></i> Lihat Alamat</a>
                    <?php }?>
                </td>
                <td><?php echo $pelalawan->no_telpon ?></td>
                <td><?php echo $pelalawan->kondisi ?></td>
                <td><?php echo $pelalawan->status ?></td>
                <td><?php echo $pelalawan->masa_awal ?></td>
                <td><?php echo $pelalawan->masa_akhir ?></td>
                <td>Rp.<?php echo number_format($pelalawan->tarif,'0',',','.') ?></td>
                <td><?php $date = date("Y-m-d");
                        $akhir = $pelalawan->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $oustanding =  $pelalawan->tarif * $numBulan;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
                <td><?php echo $pelalawan->nama_regional ?></td>
                <td><?php echo $pelalawan->janji_bayar ?></td>
                <td><?php echo $pelalawan->tanggal_pelaksanaan ?></td>
                <td>
                    <?php if($pelalawan->ttd != null) { ?>
                        <img src="<?php echo base_url('assets/upload/image/'.$pelalawan->ttd)?>" class="img img-responsive img-thumbnail" width="60">
                    <?php } ?>
                </td>
                <td>
                    <a href="<?php echo base_url('staff/selesai/gambar/'.$pelalawan->id) ?>" class="btn btn-success btn-xs"><i class="fa fa-image"></i>Gambar</a>
                    <a href="<?php echo base_url('staff/selesai/edit/'.$pelalawan->id) ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit</a>
                    <?php 
                        $gambar     = $this->data_model->detail_delete_gambar($pelalawan->id);
                        if($pelalawan->ttd != null && $gambar != null) { ?>
                            <a href="<?php echo base_url('staff/selesai/cetak_data/'.$pelalawan->id) ?>" class="btn btn-info btn-xs" target="_blank">
                            <i class="fa fa-print"></i> Cetak Data</a>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>