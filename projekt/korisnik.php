<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>korisnik</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="news">
        <meta name="keywords" content="Europe">
        <meta name="author" content="Branko Tomašić">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stilP.css">
    </head>
    <body>
        <header>
        <?php
                include "nav.php";
            ?>
    </header>
        <main>
            <p>
                <?php
                    session_start();
                    echo $_SESSION['korisnickoIme'].", nemate dovoljnu razinu prava za pristup ovoj stranici!";
                    echo"<p><a href='pocetna.php'>POVRATAK</a></p>";
                ?>
            </p>
        </main>
        <footer>
                <?php
                    include "footer.php";
                    ?>
        </footer>
        


    </body>
</html>
