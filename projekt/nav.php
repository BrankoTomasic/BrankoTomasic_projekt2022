<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>navigacija</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="news">
        <meta name="keywords" content="Europe">
        <meta name="author" content="Branko Tomašić">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stilNav.css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>El Confidencial</h1>
                <h5>El diario de los lectores influyentes</h5>
                <?php
                    $politika = "politika";
                    $vrijeme  = "vrijeme";
                ?>
               
                    <nav >
                        <ul class="nav  justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="pocetna.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="kategorija.php?varname=<?php echo $politika?>">POLITIKA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="kategorija.php?varname=<?php echo $vrijeme?>">VRIJEME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="prijava.php"> ADMINISTRACIJA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="forma.php"> VIJESTI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registracija.php"> REGISTRACIJA</a>
                            </li>
                           
                        </ul>
                    </nav>
            </div> 
        </header>
        


    </body>
</html>
