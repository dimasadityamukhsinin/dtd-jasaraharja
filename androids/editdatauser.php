<?php
    $connect_to_db = mysqli_connect('localhost', 'u457502919_jrriau', 'JRRiau42851', 'u457502919_dtd');
    

    $id = $_POST['id'];
    $id_user = $_POST['id_user'];
    $nopol = $_POST['nopol'];
    $pemilik = $_POST['pemilik'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $kondisi = $_POST['kondisi'];
    $status = $_POST['status'];
    $masa_awal = $_POST['masa_awal'];
    $masa_akhir = $_POST['masa_akhir'];
    $tarif = $_POST['tarif'];
    $janji_bayar = $_POST['janji_bayar'];
    $tanggal_pelaksanaan = $_POST['tanggal_pelaksanaan'];


    $ttd = md5(time()) . '.' . $_POST['ext'];
    mysqli_query($connect_to_db, "UPDATE jr_data set id_user='$id_user', nopol='$nopol', pemilik='$pemilik', alamat='$alamat', no_telpon='$no_telpon', kondisi='$kondisi', status='$status', masa_awal='$masa_awal', masa_akhir='$masa_akhir', tarif='$tarif', janji_bayar='$janji_bayar', ttd='$ttd', tanggal_pelaksanaan='$tanggal_pelaksanaan' WHERE id='$id'");
    
    // Make sure you have created this directory already
    $target_dir = "../assets/upload/image/";
  
    // Generate a random name 
    $target_file = $target_dir . md5(time()) . '.' . $_POST['ext'];

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo json_encode(['response' => "The image has been uploaded."]);
        }else {
      echo json_encode(["error" => "Sorry, there was an error uploading your file."]); 
    }
    } else {
        echo json_encode(["error" => "File is not an image."]);
       
    }
?>