<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Prijava</title>
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
            <form method="post" action="prijavaProvjera.php">
                <label for="ime">Unesite korisničko ime:</label>
                <br>
                <input type="text" name="ime" id="ime" >
                <br>
                <span id="pIme"></span>
                <br>
                <br>
                <br>
                <label for="lozinka">Unesite lozinku:</label>
                <br>
                <input type="password" name="lozinka" id="lozinka">
                <br>
                <span id="pLozinka"></span>
                <br>
                <br>
                <br>
                <input type="submit" id="posalji" name="posalji" value="Prijava">

            </form>
            
            <script>
                document.getElementById("posalji").onclick = function(event){
                    var provjera = true;

                    var ime = document.getElementById("ime");
                    if(ime.value.length == 0){
                        provjera = false;
                        ime.style.border = "1px dashed red";
                        document.getElementById("pIme").innerHTML = "Korisničko ime ne može biti prazno!";
                    }

                    var pass = document.getElementById("lozinka");
                    if(pass.value.length == 0){
                        provjera = false;
                        pass.style.border = "1px dashed red";
                        document.getElementById("pLozinka").innerHTML = "Lozinka ne može biti prazna!";
                    }
                    

                    if(provjera == false) {
                        event.preventDefault();
                    }
                }

            </script>
              
        </main>
        <footer>
                       
            <?php
                include "footer.php";
                ?>
                
        </footer>
        


    </body>
</html>