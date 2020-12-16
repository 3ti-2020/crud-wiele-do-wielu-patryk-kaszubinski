<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="top">
        <h1><i>BLOG</i></h1>
        <?php 
        if(isset($_GET['znajdz'])){
        echo("<a href='index.php'>RESET</a>");
        }
        ?>
    </div>
    <div class="main">
    <?php
    
    $servername="remotemysql.com";
    $username="Exb33YnuaQ";
    $password="imJTYDYLDl";
    $dbname="Exb33YnuaQ";

    $conn = new mysqli($servername, $username, $password, $dbname);






    if(isset($_GET['znajdz'])){
        $result = $conn->query("SELECT Distinct post, zaw, post.id, img FROM post, post_tag, tag WHERE post_tag.post_id=post.id AND tag.id = post_tag.tag_id AND tag.tag = '".$_GET['znajdz']."'");
    }else{
        $result = $conn->query("SELECT DISTINCT * FROM post");
    }

    while($wiersz = $result->fetch_assoc()){

        echo("<div class='card'>");
        echo("<div class='header'>");
        echo("<h1>".$wiersz['post']."</h1>");
        $result3 = $conn->query("SELECT * FROM post, tag, post_tag WHERE post_tag.tag_id=tag.id AND post_tag.post_id=post.id AND post_tag.post_id=".$wiersz['id']."");

            echo("<div class='formu'>");
            while($wiersz3 = $result3->fetch_assoc()){
                echo("<form action='index.php' method='GET'>
                <input type='submit' name='znajdz' value='".$wiersz3['tag']."'>
                </form>");
            }
            echo("</div>");
        echo("</div>");
        echo($wiersz['zaw']);
            echo("<div class='prawo' id='prawo'>");
                echo("ZOBACZ ZDJĘCIA");
            echo("</div>");
        echo("<div class='obrazek' id='obrazek'>");
        echo ('<img src="data:image/jpeg;base64,'.base64_encode($wiersz['img']).'"/>');
        echo("</div>");


        echo("</div>");   
    }
    ?>
    </div>
    </div>
</body>

</html>
