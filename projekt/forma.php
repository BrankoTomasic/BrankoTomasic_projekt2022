<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Forma</title>
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
            <form method="post" action="skripta.php">
                <label for="naslov">Unesite naslov vijesti:</label>
                <br>
                <input type="text" name="naslov" id="naslov" >
                <br>
                <span id="pNaslov"></span>
                <br>
                <br>
                <br>
                <label for="sazetakVijesti">Unesite sažetak vijesti:</label>
                <br>
                <textarea name="sazetakVijesti" id="sazetakVijesti"></textarea>
                <br>
                <span id="pSazetak"></span>
                <br>
                <br>
                <br>
                <label for="vijest">Unesite vijest:</label>
                <br>
                <textarea name="vijest" id="vijest" ></textarea>
                <br>
                <span id="pVijest"></span>
                <br>
                <br>
                <br>
                <label for="slike">Odaberite sliku:</label>
                <br>
                <input type="file" name="slike" accept="image/jpg,image/gif"  id="slika">
                <br>
                <span id="pSlika"></span>
                <br>
                <br>
                <br>
                <label for="kategorija" >Odaberite kategoriju:</label>
                <br>

                    <select name="kategorija" id="kategorija" >
                        <option disabled selected value> -- odaberite opciju -- </option>
                        <option value="Politika">Politika</option>
                        <option value="Sport">Sport</option>
                        <option value="Vrijeme">Vrijeme</option>
                        <option value="Zabava">Zabava</option>
                    </select>
                    <br>
                     <span id="pKategorija"></span>
                    <br>
                <br>
                <br>
                <label for="vijesti" >Želite li da se vijest arhivira:</label>
                <input type="checkbox" name="obavijest" >
                <br>
                <br>
                <br>
                <input type="submit" id="posalji" name="posalji" value="Unesi vijest">

            </form>
            
            <script>
                document.getElementById("posalji").onclick = function(event){
                    var provjera = true;
                    
                    var poljeNaslov = document.getElementById("naslov");
                    if(poljeNaslov.value.length < 5 || poljeNaslov.value.length > 30){
                        provjera = false;
                        poljeNaslov.style.border = "1px dashed red";
                        document.getElementById("pNaslov").innerHTML = "Naslov mora imati 5 do 30 znakova!";
                        document.getElementById("pNaslov").style.color ="red";
                    }
                    else {
                        poljeNaslov.style.border = "1px solid black";
                        document.getElementById("pNaslov").innerHTML = "";
                        
                    }
                    var kratkiSadrzaj = document.getElementById("sazetakVijesti");
                    if(kratkiSadrzaj.value.length < 10 || kratkiSadrzaj.value.length > 100){
                        provjera = false;
                        kratkiSadrzaj.style.border = "1px dashed red";
                        document.getElementById("pSazetak").innerHTML = "Sazetak vijesti mora imati 10 do 100 znakova!";
                        document.getElementById("pSazetak").style.color ="red";
                    }
                    else{
                        kratkiSadrzaj.style.border = "1px solid black";
                        document.getElementById("pSazetak").innerHTML = "";
                    }
                    
                    var vijest = document.getElementById("vijest");
                    if(vijest.value.length == 0){
                        provjera = false;
                        vijest.style.border = "1px dashed red";
                        document.getElementById("pVijest").innerHTML = "Vijest ne može biti prazna!";
                        document.getElementById("pVijest").style.color ="red";
                    }
                    else{
                        vijest.style.border = "1px solid black";
                        document.getElementById("pVijest").innerHTML = "";
                    }
                    

                    var kategorija = document.getElementById("kategorija");
                    if(kategorija.value.length == 0){
                        provjera = false;
                        kategorija.style.border = "1px dashed red";
                        document.getElementById("pKategorija").innerHTML = "Odaberite kategoriju!";
                        document.getElementById("pKategorija").style.color ="red";
                    }
                    else{
                        kategorija.style.border = "1px solid black";
                        document.getElementById("pKategorija").innerHTML = "";
                    }
                    
                    var slika = document.getElementById("slika");
                    if(slika.value.length == 0) {
                        provjera = false;
                        slika.style.border = "1px dashed red";
                        document.getElementById("pSlika").innerHTML = "Odaberite sliku!";
                        document.getElementById("pSlika").style.color ="red";
                    }
                    else{
                        slika.style.border = "1px solid black";
                        document.getElementById("pSlika").innerHTML = "";
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