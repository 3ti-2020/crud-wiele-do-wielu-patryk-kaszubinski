<?php

$servername="remotemysql.com";
$username="Exb33YnuaQ";
$password="imJTYDYLDl";
$dbname="Exb33YnuaQ";
$conn=new mysqli($servername,$username,$password,$dbname);

$id_us = $_POST['id_us'];
$id_ks=$_POST['id_ks'];
$data = $_POST['data'];

$sql="INSERT INTO `wypoz`(`id_us`, `id_ks`, `data_wyp`, `data_odd`) VALUES ('$id_us','$id_ks', CURDATE(), '$data')";

      echo($sql);

      mysqli_query($conn, $sql);

      $conn->close();

     header('Location: http://localhost/ads/index.php');

?>