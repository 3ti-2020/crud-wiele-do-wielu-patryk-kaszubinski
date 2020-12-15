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
    <div class="top"><h1><i>BLOG</i></h1></div>
    <div class="main">
    <?php
    
    $servername="remotemysql.com";
    $username="Exb33YnuaQ";
    $password="imJTYDYLDl";
    $dbname="Exb33YnuaQ";

    $conn = new mysqli($servername, $username, $password, $dbname);






    if(isset($_GET['szukaj_tag'])){
        echo("<a href='index.php'>RESET</a>");
        $result = $conn->query("SELECT * FROM post, post_tag, tag WHERE post_tag.post_id=post.id AND tag.tag = '".$_GET['szukaj_tag']."' AND tag.id = post_tag.tag_id");
    }else{
        $result = $conn->query("SELECT * FROM post");

    }

    while($wiersz = $result->fetch_assoc()){
        echo("<div class='card'>");
        echo("<div class='header'>");
        echo("<h1>".$wiersz['post']."</h1>");
        $result3 = $conn->query("SELECT * FROM post, tag, post_tag WHERE post_tag.tag_id=tag.id AND post_tag.post_id=post.id AND post_tag.post_id=".$wiersz['id']."");

            echo("<div class='formu'>");
            while($wiersz3 = $result3->fetch_assoc()){
        

                echo("<form action='index.php' method='GET'>
                <input type='submit' name='szukaj_tag' value='".$wiersz3['tag']."'>
                </form>");
            }
            echo("</div>");
        echo("</div>");
        echo($wiersz['zaw']);
            echo("<div class='prawo'>");
                echo("WCIŚNIJ");
            echo("</div>");
        echo("<div class='obrazek'>
        <img src='obrazy/".$wiersz['obr']."'>
        </div>");
        echo("</div>");

        
    }
    
    ?>
    </div>
    </div>
</body>

</html>
