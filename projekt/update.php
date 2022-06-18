<?php

 $dbc = mysqli_connect('localhost','root','','projekt2022') or 
 die("Error connecting to database".mysqli_connect_error());

 if($dbc){
     
     if(isset($_POST['posalji'])){
        $id = $_POST['id'];
         $naslov = $_POST['naslov'];
         if($naslov==""){
             $query = "SELECT * FROM vijesti WHERE id = $id";
             $result = mysqli_query($dbc, $query);
             if($result){
                 while($row = mysqli_fetch_array($result)){
                     $naslov = $row['naslov'];
                 }
             }
         }
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
         $sql = "UPDATE vijesti SET naslov=?, sazetak=?,vijest=?, 
         kategorija=?, arhiva=?, slika=?, vrijemeNastanka='$datum'
         WHERE id=?";
        
         $stmt = mysqli_stmt_init($dbc);
         if(mysqli_stmt_prepare($stmt, $sql)){
            mysqli_stmt_bind_param($stmt, "ssssisi", $naslov, $sazetak, $vijest, $kategorija, $arhiva, $slika, $id);
            mysqli_stmt_execute($stmt);
         }
         mysqli_close($dbc);
         header('Location: administracija.php');
     }
 }

?>