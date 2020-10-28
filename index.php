<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <header>
    <h1>Patryk Kaszubiński 4Ti</h1>
    </header>
    <div class="main">
    
    <?php
        $servername="remotemysql.com";
        $username="Exb33YnuaQ";
        $password="imJTYDYLDl";
        $dbname="Exb33YnuaQ";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $result = $conn->query("SELECT imie, nazwisko, tytul FROM wypozyczenia, ksiazki, autorzy WHERE (wypozyczenia.id_a=autorzy.id_a) and (wypozyczenia.id_ks=wypozyczenia.id_ks)");

        echo("<table>");
        echo("<tr>
        <td>imie</td>
        <td>nazwisko</td>
        <td>tytul</td>
        </tr>");

        while($wiersz = $result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$wiersz['imie']."<td>".$wiersz['nazwisko']."<td>".$wiersz['tytul']);
            echo("</tr>");
        }
        echo("</table>");
    ?>
    </div>
    <div class="right">
    <form action="insert.php" method="POST">
    id_a<input type="text" name="id_a">
    id_ks<input type="text" name="id_ks">
    <input type="submit" value="Wyslij" method="POST">
    </form>
    </div>
</body>
</html>