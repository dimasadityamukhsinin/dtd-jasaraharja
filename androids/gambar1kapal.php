<?php
    $connect_to_db = mysqli_connect('localhost', 'u457502919_jrriau', 'JRRiau42851', 'u457502919_dtd');

    $id_data = $_POST['id_data'];


    $foto = md5(time()) . '.' . $_POST['ext'];
    mysqli_query($connect_to_db, "INSERT INTO jr_gambarkapal value(null,'$id_data','$foto')");
    
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