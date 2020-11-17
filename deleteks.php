<?php

    $servername="remotemysql.com";
    $username="Exb33YnuaQ";
    $password="imJTYDYLDl";
    $dbname="Exb33YnuaQ";
    $conn=new mysqli($servername,$username,$password,$dbname);

    $id_wyp=$_POST['id_wyp'];

    $sql="DELETE FROM wypozyczenia WHERE `id_wyp`='$id_wyp'";

    mysqli_query($conn, $sql);

    $conn->close();

    header('Location: https://wdw-patryk-k.herokuapp.com/');

?>