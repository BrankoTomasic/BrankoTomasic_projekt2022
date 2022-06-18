<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Registracija</title>
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
            <form method="post" action="registracijaProvjera.php">

                <label for="name">Unesite ime:</label>
                <br>
                <input type="text" name="name" id="name">
                <br>
                <span id="pName"></span>
                <br>
                <br>
                <br>
                <label for="prezime">Unesite prezime:</label>
                <br>
                <input type="text" name="prezime" id="prezime">
                <br>
                <span id="pPrezime"></span>
                <br>
                <br>
                <br>
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
                <label for="prava">Unesite razinu prava(administrator/korisnik):</label>
                <br>
                <input type="text" name="prava" id="prava">
                <br>
                <span id="pPrava"></span>
                <br>
                <br>
                <br>
                <input type="submit" id="posalji" name="posalji" value="Registracija">

            </form>
            
            <script>
                document.getElementById("posalji").onclick = function(event){
                    var provjera = true;


                    var name = document.getElementById("name");
                    if(name.value.length == 0){
                        provjera = false;
                        name.style.border = "1px dashed red";
                        document.getElementById("pName").innerHTML = "Ime ne može biti prazno!";
                    }

                    var prezime = document.getElementById("prezime");
                    if(prezime.value.length == 0){
                        provjera = false;
                        prezime.style.border = "1px dashed red";
                        document.getElementById("pPrezime").innerHTML = "Prezime ne može biti prazno!";
                    }


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

                    var prava = document.getElementById("prava");
                    if(prava.value.length == 0){
                        provjera = false;
                        prava.style.border = "1px dashed red";
                        document.getElementById("pPrava").innerHTML = "Razina prava ne može biti prazna!";
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