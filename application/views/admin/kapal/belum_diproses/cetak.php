<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/image/'.$konfigurasi->gambar) ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" media="print">
    </style>
</head>
<body onload="print()">
    <center>
        <center>
            <img src="<?php echo base_url('assets/upload/image/'.$konfigurasi->gambar) ?>" class="img img-responsive img-thumbnail" width="13%">
            <font face="verbelum_diproses">
                <h4><?php echo $konfigurasi->nama_instansi ?>
                <br><?php echo $konfigurasi->no_telpon ?>
                <br><?php echo $konfigurasi->alamat ?>
                </h3>
            </font>
        <center><table  class="table table-bordered">
            <tr>
                <th>
                    <b>NO</b>
                </th>
                <th>
                    <b>Nama Perusahaan</b>
                </th>
                <th>
                    <b>Pemilik</b>
                </th>
                <th>
                    <b>Alamat</b>
                </th>
                <th>
                    <b>Nomor Telpon</b>
                </th>
                <th>
                    <b>Nama Kapal</b>
                </th>
                <th>
                    <b>Kondisi</b>
                </th>
                <th>
                    <b>Jumlah Kapal</b>
                </th>
                <th>
                    <b>Status</b>
                </th>
                <th>
                    <b>Masa Berlaku Awal</b>
                </th>
                <th>
                    <b>Masa Berlaku Akhir</b>
                </th>
                <th>
                    <b>Tarif</b>
                </th>
                <th>
                    <b>Regional</b>
                </th>
                <th>
                    <b>Outstanding</b>
                </th>
            </tr>
            <?php $no=1; foreach($belum_diproses as $belum_diproses) { ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $belum_diproses->nama_perusahaan ?>
                </td>
                <td>
                    <?php echo $belum_diproses->pemilik ?>
                </td>
                <td>
                    <?php echo $belum_diproses->alamat ?>
                </td>
                <td>
                    <?php echo $belum_diproses->no_telpon ?>
                </td>
                <td>
                    <?php echo $belum_diproses->nama_kapal ?>
                </td>
                <td>
                    <?php echo $belum_diproses->kondisi ?>
                </td>
                <td>
                    <?php echo $belum_diproses->jumlah_kapal ?>
                </td>
                <td>
                    <?php echo $belum_diproses->status ?>
                </td>
                <td>
                    <?php echo $belum_diproses->masa_awal ?>
                </td>
                
                <td>
                    <?php echo $belum_diproses->masa_akhir ?>
                </td>
                <td>
                    Rp<?php echo number_format($belum_diproses->tarif,'0',',','.') ?>
                </td>
                <td>
                    <?php echo $belum_diproses->nama_regional ?>
                </td>
                <td>
                    <?php $date = date("Y-m-d");
                        $akhir = $belum_diproses->masa_akhir;
                        $timeStart = strtotime("$akhir");
                        $timeEnd = strtotime("$date");
                        // Menambah bulan ini + semua bulan pada tahun sebelumnya
                        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                        // menghitung selisih bulan
                        $numBulan += date("m",$timeEnd)-date("m",$timeStart);

                        $total =  $belum_diproses->tarif * $numBulan;
                        $oustanding = $belum_diproses->jumlah_kapal * $total;
                        echo "Rp.", number_format($oustanding,'0',',','.');
                    ?>
                </td>
            </tr>
            <?php } ?>
        </table>
    </center>
</body>
</html>