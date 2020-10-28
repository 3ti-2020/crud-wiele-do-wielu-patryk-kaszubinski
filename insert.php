<?php

$servername="remotemysql.com";
$username="Exb33YnuaQ";
$password="imJTYDYLDl";
$dbname="Exb33YnuaQ";
$conn=new mysqli($servername,$username,$password,$dbname);


$imie = $_POST['imie'];
$nazwisko=$_POST['nazwisko'];

$sql="INSERT INTO `autorzy`(`imie`, `nazwisko`) VALUES ('$imie', '$nazwisko')";

$tytul=$_POST['tytul'];

$sql2="INSERT INTO `ksiazki`(`tytul`) VALUES ('$tytul')";

      mysqli_query($conn, $sql);
      mysqli_query($conn, $sql2);

      $result = $conn->query("SELECT id_a FROM autorzy order by id_a desc limit 1");
      $result2 = $conn->query("SELECT id_ks FROM ksiazki order by id_ks desc limit 1");


      while($wiersz = $result->fetch_assoc()){
             $zmienna= $wiersz['id_a'];
      }

      while($wiersz2 = $result2->fetch_assoc()){
            $zmienna2= $wiersz2['id_ks'];
      } 

      $sql3  = "INSERT INTO wypozyczenia(`id_a`, `id_ks`) VALUES ('$zmienna', '$zmienna2')";

      mysqli_query($conn, $sql3);

      $conn->close();

      header('Location: http://localhost/ads/index.php');

?>