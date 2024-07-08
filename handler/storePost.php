<?php
require_once "../htdocs/connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = mysqli_real_escape_string($Con, $_POST['title']);
    $description = mysqli_real_escape_string($Con, $_POST['description']);
    $currentTime = date('Y-m-d H:i:s');

    $target_dir = "../images/galeri/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check file size
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Maaf, file terlalu besar.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $query = $Con->prepare("INSERT INTO posts (created_at, title, image_path, description) VALUES (?, ?, ?, ?)");
            $query->bind_param("ssss", $currentTime, $title, $target_file, $description);

            if ($query->execute()) {
                header('Location: ../annafilahphp/view/galery.php');
                exit();
            } else {
                echo "Error: " . $query->error;
            }

            $query->close();
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
        }
    }

//    $Con->close();,
}
