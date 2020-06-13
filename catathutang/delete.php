<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    if(isset($id)){
        // Prepared statement untuk menghapus data
        $query = $connect->prepare("DELETE FROM `hutang` WHERE id=$id");
        $query->bindParam(":jumlah", $_GET["jumlah"]);
        // Jalankan Perintah SQL
        $query->execute();
        // Alihkan ke index.php
        echo "<script>alert('Data telah terhapus')</script>";
        print '<meta http-equiv="refresh" content="0;url=index.php">';
    }
?>