<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>  
    <header>
        <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-patryk-kaszubinski" class="fab fa-github"></a>
        <h1>Patryk Kaszubiński 4Ti nr.5</h1>
        <div class="pr">   
        <form action="index.php" method="POST" class="formu">
            LOGIN: <input type="text" name="login">
            HASLO: <input type="text" name="haslo" placeholder="a">
            <input type="submit" value="zaloguj">
        </form>
        <a href="kartka.html" class="karta"><h3>KARTKA</h3></a>
        </div>
    </header>

    <div class="main">
    <?php
    session_start();
    if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj' ){  
        unset($_SESSION['zalogowany']);                         
    }

    if(isset($_POST['haslo']) && $_POST['haslo'] == 'a' ){
        $_SESSION['zalogowany'] = 1;
    }


    if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1){

    
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
        echo("<a href='index.php?akcja=wyloguj'><h1 class='wylog'>WYLOGUJ</h1></a>");
    }else{
        echo("<h1>NIE ZALOGOWANO</h1>");
    }
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
