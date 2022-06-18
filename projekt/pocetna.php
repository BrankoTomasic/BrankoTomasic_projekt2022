<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Početna</title>
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
            <section class="containerEuropa">
                <ul>
                    <li>Politika</li>
                </ul>
                <div class="row">
                    <?php 
                        
                        $dbc = mysqli_connect('localhost','root','','projekt2022') or 
                        die("Error connecting to database".mysqli_connect_error());

                        if($dbc){
                            $query = "SELECT * FROM vijesti where kategorija ='politika' and arhiva='FALSE' ";
                            $result = mysqli_query($dbc,$query);
                            if($result){
                                while($row = mysqli_fetch_array($result)){
                                    $sazetak = $row['sazetak'];
                                    $slika = $row['slika'];
                                    $vrijeme = $row['vrijemeNastanka'];
                                    $id = $row['id'];
                                    echo  "<article class='col-lg-4 col-md-6 col-sm-12'>
                                    <a href='Vijest.php?id=$id'>
                                    <img src='slikeProjekt/$slika'>
                                    <p>
                                        $sazetak
                                    </p>
                                    <p>
                                       $vrijeme
                                    </p>
                                    </a>
                                </article>";
                                }
                            }
                            
                        }
                    
                    ?>
                 
                </div>
            </section>
            <section class="containerTeknautas">
                <ul>
                    <li>VRIJEME</li>
                </ul>
                <div class="row">
                <?php 
                        
                        $dbc = mysqli_connect('localhost','root','','projekt2022') or 
                        die("Error connecting to database".mysqli_connect_error());

                        if($dbc){
                            $query = "SELECT * FROM vijesti where kategorija ='vrijeme' and arhiva ='FALSE' ";
                            $result = mysqli_query($dbc,$query);
                            if($result){
                                while($row = mysqli_fetch_array($result)){
                                    $sazetak = $row['sazetak'];
                                    $slika = $row['slika'];
                                    $vrijeme = $row['vrijemeNastanka'];
                                    $id = $row['id'];
                                    echo  "<article class='col-lg-4 col-md-6 col-sm-12'>
                                    <a href='vijest.php?id=$id'>
                                    <img src='slikeProjekt/$slika'>
                                    <p>
                                        $sazetak
                                    </p>
                                    <p>
                                       $vrijeme
                                    </p>
                                    </a>
                                </article>";
                                }
                            }
                            
                        }
                    
                    ?>

                </div>
            </section>

        </main>
        <footer>
                <?php
                    include "footer.php";
                    ?>
        </footer>
        


    </body>
</html>
