<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Vijest</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="news">
        <meta name="keywords" content="Europe">
        <meta name="author" content="Branko Tomašić">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stilV.css">
    </head>
    <body>
        <header>
            <?php include "nav.php";
                $id = $_GET["id"];
                $dbc = mysqli_connect('localhost','root','','projekt2022') or 
                    die("Error connecting to database".mysqli_connect_error());
                $query = "SELECT * FROM vijesti WHERE id=$id";
                $result = mysqli_query($dbc,$query);
                if($result){
                    while($row = mysqli_fetch_array($result)){
                        $naslov = $row["naslov"];
                        $kategorija = $row["kategorija"];
                        $slika = $row["slika"];
                        $sazetak = $row["sazetak"];
                        $vijest = $row["vijest"];
                        $vrijeme = $row["vrijemeNastanka"];

                    }
                }

            ?>
            <div class="containerHeader">
                <ul>
                    <li><?php echo $kategorija ?></li>
                </ul>
            </div>
        </header>
        <main>
            <div class="container">
                <h1><?php echo $naslov ?></h1>
                    <div class="containerUvod">
                        <p><?php echo $sazetak ?> </p>
                        <img src="slikeProjekt/<?php echo $slika?>">
                    </div>
                </div>
                
                    <div class="containerClanak">
                            <p><?php echo $vrijeme ?></p>
                            <p>
                                <?php echo $vijest ?>
                            </p>
                    </div>
              
        </main>
        <footer>
                       
             <p>  @TITANIA COMPANIA EDITORIAL S.L 2019 Espana Todos los derechos reservados</p>
                
        </footer>
        


    </body>
</html>