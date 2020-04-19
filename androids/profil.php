<?php
    $connect_to_db = mysqli_connect('localhost', 'u457502919_jrriau', 'JRRiau42851', 'u457502919_dtd');

    $id = $_POST['id'];
    $kode_samsat = $_POST['kode_samsat'];
    $cabang = $_POST['cabang'];
    $nama_samsat = $_POST['nama_samsat'];
    $alamat = $_POST['alamat'];
    $nama = $_POST['nama'];
    $no_telpon = $_POST['no_telpon'];
    $jabatan = $_POST['jabatan'];


    $ttd = md5(time()) . '.' . $_POST['ext'];
    mysqli_query($connect_to_db, "UPDATE jr_user set kode_samsat='$kode_samsat', cabang='$cabang', nama_samsat='$nama_samsat', alamat='$alamat', nama='$nama', no_telpon='$no_telpon', jabatan='$jabatan', ttd='$ttd' where id='$id' ");
    
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