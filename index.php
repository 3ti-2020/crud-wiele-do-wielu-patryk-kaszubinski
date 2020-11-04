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
        <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-patryk-kaszubinski"><h3>GitHub</h3></a>
        <h1>Patryk Kaszubiński 4Ti nr.5</h1>
        <a href="kartka.html"><h3>KARTKA</h3></a>
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
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>Tytul</td>
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
    IMIE<input type="text" name="imie" placeholder="np. Henryk">
    NAZWISKO<input type="text" name="nazwisko" placeholder="np. Sienkiewicz">
    TYTUL<input type="text" name="tytul" placeholder="np. Quo Vadis">
    <input type="submit" value="Wyslij" method="POST">
    </form>
    <div class="clock" id='clock'>
    
    </div>
        
    </div>
</body>
<script src="script.js"></script>
</html>