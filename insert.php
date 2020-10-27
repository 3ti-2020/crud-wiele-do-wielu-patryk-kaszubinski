<?php
$servername="localhost";
$username="root";
$password="";
$dbname="biblioteka2";
$conn=new mysqli($servername,$username,$password,$dbname);

$id_wyp=$_POST['id_wyp'];
$id_a=$_POST['id_a'];
$id_ks=$_POST['id_ks'];

$sql="INSERT INTO `wypozyczenia` (`id_wyp`, `id_a`, `id_ks`) VALUES (NULL, $id_a, $id_ks)";

mysqli_query($conn,$sql);

header("Location: http://localhost/ads/");
?>