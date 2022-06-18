<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Azuriraj</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="news">
        <meta name="keywords" content="Europe">
        <meta name="author" content="Branko Tomašić">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <link rel="stylesheet" href="stilForma.css" type="text/css">
    </head>
    <body>
        <header>
            <?php
                include "nav.php";
            ?>
        </header>
        <main>
            <?php 
                $id = $_GET['id'];
                 $dbc = mysqli_connect('localhost','root','','projekt2022') or 
                 die("Error connecting to database".mysqli_connect_error());

                 if($dbc){
                     $query = "SELECT * FROM vijesti where id=$id";
                     $result = mysqli_query($dbc,$query);
                     if($result){
                         while($row = mysqli_fetch_array($result)){
                            $naslov = $row['naslov'];
                            $sazetak = $row['sazetak'];
                            $vijest = $row['vijest'];
                            $slika = $row['slika'];
                            $kategorija = $row['kategorija'];
                            $arhiva = $row['arhiva'];
                            $vrijeme = date("Y-m-d");
                            
                            $_POST['naslov'] = $naslov;
                            $_POST['sazetakVijesti'] = $sazetak;
                            $_POST['vijest'] = $vijest;
                            $_POST['slike'] = $slika; 
                            $_POST['kategorija'] = $kategorija;
                            $_POST['obavijest'] = $arhiva;
                         }
                     }
                 }
            
            ?>
            
            <form method="post" action="update.php" >
                <input type="hidden" id="id" name="id" value="<?=$id ?>">
                <label for="naslov">Unesite naslov vijesti:</label>
                <input type="text" name="naslov" id="naslov" >
                <br>
                <br>
                <br>
                <label for="sazetakVijesti">Unesite sažetak vijesti:</label>
                <textarea name="sazetakVijesti" ></textarea>
                <br>
                <br>
                <br>
                <label for="vijest">Unesite vijest:</label>
                <textarea name="vijest" ></textarea>
                <br>
                <br>
                <br>
                <label for="slike">Odaberite sliku:</label>
                <input type="file" name="slike" accept="image/jpg,image/gif" >
                <br>
                <br>
                <br>
                <label for="kategorija" >Odaberite kategoriju:</label>

                    <select name="kategorija" id="kategorija" >
                        <option value="Politika">Politika</option>
                        <option value="Sport">Sport</option>
                        <option value="Vrijeme">Vrijeme</option>
                        <option value="Zabava">Zabava</option>
                    </select>
                    <br>
                <br>
                <br>
                <label for="vijesti" >Želite li da se vijest arhivira:</label>
                <input type="checkbox" name="obavijest" >
                <br>
                <br>
                <br>
                <input type="submit" id="posalji" name="posalji" value="Promijenite vijest">

            </form>
            
              
        </main>
        <footer>
                       
            <?php
                include "footer.php";
                ?>
                
        </footer>
        


    </body>
</html>