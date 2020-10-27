<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="biblioteka2";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $result = $conn->query("SELECT * FROM wypozyczenia");

        echo("<table style='border: 1px solid black'>");
        echo("<tr>
        <td style='border: 1px solid black'>id_wyp</td>
        <td style='border: 1px solid black'>id_a</td>
        <td style='border: 1px solid black'>id_ks</td>
        </tr>");

        while($wiersz = $result->fetch_assoc()){
            echo("<tr>");
            echo("<td style='border: 1px solid black'>".$wiersz['id_wyp']."<td>".$wiersz['id_a']."<td>".$wiersz['id_ks']);
            echo("</tr>");
        }
        echo("</table>");
    ?>
    <form action="insert.php" method="POST">
    id_a<input type="text" name="id_a">
    id_ks<input type="text" name="id_ks">
    <input type="submit" value="Wyslij" method="POST">
    </form>
</body>
</html>