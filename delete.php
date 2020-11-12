<?php

    $servername="remotemysql.com";
    $username="Exb33YnuaQ";
    $password="imJTYDYLDl";
    $dbname="Exb33YnuaQ";
    $conn=new mysqli($servername,$username,$password,$dbname);

    $id=$_POST['id'];

    $sql="DELETE FROM wypoz WHERE `id`='$id'";

    mysqli_query($conn, $sql);

    $conn->close();

    header('Location: https://wdw-patryk-k.herokuapp.com/');

?>