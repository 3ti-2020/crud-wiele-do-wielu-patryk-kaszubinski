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
    <h1>Patryk Kaszubiński 4Ti nr.5</h1>
    </header>
    <div class="main">
    
    <?php
        $servername="remotemysql.com";
        $username="Exb33YnuaQ";
        $password="imJTYDYLDl";
        $dbname="Exb33YnuaQ";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $result = $conn->query("SELECT imie, nazwisko, tytul FROM ksiazki, wypozyczenia, autorzy WHERE ksiazki.id_ks = wypozyczenia.id_ks AND autorzy.id_a=wypozyczenia.id_a");

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
    imie<input type="text" name="imie">
    nazwisko<input type="text" name="nazwisko">
    tytul<input type="text" name="tytul">
    <input type="submit" value="Wyslij" method="POST">
    </form>
    </div>
</body>
</html>