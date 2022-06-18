<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>vijest</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="news">
        <meta name="keywords" content="">
        <meta name="author" content="Branko Tomašić">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stilK.css">
    </head>
    <body>
        <header>
            <?php
           
                include "nav.php";
        
        
            ?>
        </header>
        <main>
            <?php
            $kategorija = $_GET['varname'];
            if($_GET['varname']=="politika"){
               
                echo"<h1>Politika</h1>";
            }
            else{
                echo"<h1>Vrijeme</h1>";
            }
                ?>

            <div class ="row">
                
                <?php

                    $dbc = mysqli_connect('localhost','root','','projekt2022') or 
                    die("Error connecting to database".mysqli_connect_error());

                    if($dbc){
                        if($_GET['varname']=="politika"){
                            $query = "SELECT * FROM vijesti where kategorija = 'politika' and arhiva='FALSE' ";
                            $result = mysqli_query($dbc,$query);
                            if($result){
                                while($row = mysqli_fetch_array($result)){
                                    $naslov = $row['naslov'];
                                    $sazetak = $row['sazetak'];
                                    $vijest = $row['vijest'];
                                    $slika = $row['slika'];
                                    $vrijeme = $row['vrijemeNastanka'];
                                    $id = $row['id'];
                                

                                    echo"
                                    
                                    <article class='col-lg-12 col-md-12 col-sm-12'>
                                    <a href='vijest.php?id=$id'>
                                            <h3>$naslov</h3>
                                            <img src='slikeProjekt/$slika'>
                                            <p>
                                                $sazetak
                                            </p>
            
                                            <p>
                                                $vrijeme
                                            </p>
                                        </a></article>";
                                }
                            }
                        }
                        else{
                            $query = "SELECT * FROM vijesti where kategorija = 'vrijeme' and arhiva='FALSE' ";
                            $result = mysqli_query($dbc,$query);
                            if($result){
                                while($row = mysqli_fetch_array($result)){
                                    $naslov = $row['naslov'];
                                    $sazetak = $row['sazetak'];
                                    $vijest = $row['vijest'];
                                    $slika = $row['slika'];
                                    $vrijeme = $row['vrijemeNastanka'];
                                    $id = $row['id'];


                                    echo"<article class='col-lg-12 col-md-12 col-sm-12'>
                                    <a href='vijest.php?id=$id'>
                                            <h3>$naslov</h3>
                                            <img src='slikeProjekt/$slika'>
                                            <p>
                                                $sazetak
                                            </p>
                                           
                                            <p>
                                                $vrijeme
                                            </p>
                                        </a></article>";
                            }
                        }
                    }
                }
                mysqli_close($dbc);
                ?>
                <article class='col-lg-6 col-md-12 col-sm-12'>

            </div>
        </main>
        <footer>
                <?php
                   
                    include "footer.php";
                    ?>
        </footer>
        


    </body>
</html>
