<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Administracija</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="news">
        <meta name="keywords" content="Europe">
        <meta name="author" content="Branko Tomašić">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stilAdmin.css">
    </head>
    <body>
        <header>
            <?php
                include "nav.php";
            ?>
        </header>
        <main>
           <h1>ADMINISTRACIJA</h1>
           <h3>Obrišite/uredite vijesti</h3>
           <div class="row" id="prvi">
                <div class='col-lg-2 col-md-2 col-sm-2 '></div>
                <div class='col-lg-2 col-md-2 col-sm-2'></div>
                <div class='col-lg-2 col-md-2 col-sm-2'><p>Naslov</p></div>
                <div class='col-lg-2 col-md-2 col-sm-2'><p>Kategorija</p></div>
                <div class='col-lg-2 col-md-2 col-sm-2'><p>Vrijeme Kreiranja</p></div>
                <div class='col-lg-2 col-md-2 col-sm-2'><p>Arhiva</p></div>
            </div>
           
            

              
                    <?php
                        $dbc = mysqli_connect('localhost','root','','projekt2022') or 
                        die("Error connecting to database".mysqli_connect_error());
                        if($dbc){
                            $query = "SELECT * from vijesti";
                            $result = mysqli_query($dbc,$query);
                            if($result){
                                while($row = mysqli_fetch_array($result)){
                                    $naslov = $row['naslov'];
                                    $id = $row['id'];
                                    $vrijeme = $row['vrijemeNastanka'];
                                    $kategorija = $row['kategorija'];
                                    if($row['arhiva']==1){
                                        $arhiva = "Da";
                                    }
                                    else{
                                        $arhiva = "Ne";
                                    }


                                    echo"<div class='row'>
                                        <div class='col-lg-2 col-md-2 col-sm-2'><a href='uredi.php?id=$id'>Uredi</a></div>
                                        <div class='col-lg-2 col-md-2 col-sm-2'><a href='obrisi.php?id=$id'>Obriši</a></div>
                                        
                                        <div class='col-lg-2 col-md-2 col-sm-2'><p class='vidljivo'>Naslov: </p>$naslov</div>
                                        <div class='col-lg-2 col-md-2 col-sm-2'><p class='vidljivo'>Kategorija: </p>$kategorija</div>
                                        <div class='col-lg-2 col-md-2 col-sm-2'><p class='vidljivo'>Vrijeme kreiranja: </p>$vrijeme</div>
                                        <div class='col-lg-2 col-md-2 col-sm-2'><p class='vidljivo'>Arhiva: </p>$arhiva</div>
                                    
                                    </div>";
                                }
                            }
                        }

                    ?>
           
        


        </main>
        <footer>
                <?php
                    include "footer.php";
                    ?>
        </footer>
        


    </body>
</html>
