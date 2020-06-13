<?php
require_once ('footer.php'); 
  $id = $_GET['id'];
  $tampil = $connect->prepare("SELECT * FROM hutang WHERE id='$id'");
  $tampil->execute();
  $tampil_data = $tampil->fetch(PDO::FETCH_LAZY);

    // if(!isset($_GET['jumlah'])){
    //     die("Error: Data tidak ditemukan");
    // // }
    // $result = $connect->query("SELECT * FROM `hutang` WHERE jumlah = :jumlah");
    // $result->bindParam(":hutang", $_GET['hutang']);
    // $result->execute();
    // if($tampil->rowCount() == 0){
    //     die("Error: Data tidak ditemukan");
    // }else{
    //     $row = $tampil->fetch();
    // }
    if(isset($_POST['submit'])){
        $nama = htmlentities($_POST['nama']);
        $jumlah = htmlentities($_POST['jumlah']);
        $hp = htmlentities($_POST['hp']);
        $query = $connect->prepare("UPDATE `hutang` SET `nama`=:nama,`hp`=:hp WHERE jumlah=:jumlah");
        $query->bindParam(":nama", $nama);
        $query->bindParam(":jumlah", $jumlah);
        $query->bindParam(":hp", $hp);
        $query->execute();
        echo "<script>alert('Data telah terubah')</script>";
        print '<meta http-equiv="refresh" content="0;url=basic_table.php">';
    }
?>

<!DOCTYPE html>
<html>
    <head>
 <title>Edit data </title>
    <meta charset="utf-8">
    </head>
 <body bgcolor="#CCCCCC">
    <h2><p align="center">EDIT DATA</p></h2>
    <form method="post">
 <table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center" style="background-image: linear-gradient(to right, #EECDA3, #EF629F); margin-top: 15%; margin-right: 20%">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" value="<?= $tampil_data->nama ?>"">
      </label> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Hutang</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="jumlah" value="<?= $tampil_data->jumlah ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">No. HP</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="hp" type="text" value="<?= $tampil_data->hp ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="EDIT"></td>
  </tr>
  </table>

  </body>
</html>