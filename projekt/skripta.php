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
  
        <?php 


            //sql
            
                $dbc = mysqli_connect('localhost','root','','projekt2022') or 
                die("Error connecting to database".mysqli_connect_error());

                if($dbc){
                    
                    if(isset($_POST['posalji'])){
                        $naslov = $_POST['naslov'];
                        $sazetak = $_POST['sazetakVijesti'];
                        $vijest = $_POST['vijest'];
                        $slika = $_POST['slike'];
                        $kategorija = $_POST['kategorija'];
                        if(isset($_POST['obavijest'])){
                            $arhiva = 1;
                        }
                        else{
                            $arhiva = 0;
                        }
                        $datum = date("Y-m-d");
                        $sql = "INSERT INTO vijesti(naslov, sazetak, vijest, kategorija, arhiva, slika)
                        VALUES(?, ?, ?, ?, ?, ?)";
                        
                        $stmt = mysqli_stmt_init($dbc);
                        if(mysqli_stmt_prepare($stmt, $sql)){
                            mysqli_stmt_bind_param($stmt, "ssssis", $naslov, $sazetak, $vijest, $kategorija, $arhiva, $slika);
                            mysqli_stmt_execute($stmt);
                            
                        }
                        mysqli_close($dbc);
                    }
                }


        
            if(isset($_POST['naslov'])){
                $naslov = $_POST['naslov'];
                
            }
            if(isset($_POST['sazetakVijesti'])){
                $sazetak = $_POST['sazetakVijesti'];
            }
            if(isset($_POST['vijest'])){
                $vijest = $_POST['vijest'];
            }
            if(isset($_POST['slike'])){
                $slika = $_POST['slike'];
            }
            if(isset($_POST['kategorija'])){
                $kategorija = $_POST['kategorija'];
            }
          
            $datum = date("d/m/Y");
            

        
        ?>
        <header>
            
              <div class="containerHeader">
     
         <ul>
             <li>
                 <?php echo $kategorija ?>
             </li>
         </ul>
        
        
        </header>
        <main>
     
            <div class="container">
                <h1><?php echo $naslov ?></h1>
                    <div class="containerUvod">
                        <p><?php echo $sazetak ?></p>
                        <img src="slikeProjekt/<?php echo $slika ?>">
                    </div>
                </div>
                
                    <div class="containerClanak">
                        <p><?php echo $datum ?></p>
                        <p><?php echo $vijest ?></p>
                        <a href="pocetna.php">Povratak na početnu stranicu</a>
                    </div>
              
        </main>
        <footer>
                       
             <p>  @TITANIA COMPANIA EDITORIAL S.L 2019 Espana Todos los derechos reservados</p>
                
        </footer>
        


    </body>
</html>