<?php
session_start();
    if(isset($_POST['ime']) && isset($_POST['lozinka']) && isset($_POST['name']) && isset($_POST['prezime']) && isset($_POST['prava'])){
        $ime = $_POST['ime'];
        $pass = $_POST['lozinka'];
        $name = $_POST['name'];
        $prezime = $_POST['prezime'];
        $prava = $_POST['prava'];
        $hashed_password = password_hash($pass, CRYPT_BLOWFISH);
        
        echo"$ime";

        $dbc = mysqli_connect('localhost','root','','projekt2022') or 
        die("Error connecting to database".mysqli_connect_error());
        $sql = "SELECT korisnickoIme FROM korisnik WHERE korisnickoIme = ?";
        $stmt = mysqli_stmt_init($dbc);
        
        $level;
        $lozinka;
        if(mysqli_stmt_prepare($stmt, $sql)){
            mysqli_stmt_bind_param($stmt,"s", $ime);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
        }
        if(mysqli_stmt_num_rows($stmt)>0){
            echo"<p>Korisničko ime zauzeto</p>";
            echo"<p><a href='registracija.php'>POVRATAK</a></p>";
        }
        else{
            $sql = "INSERT INTO korisnik (ime, prezime, korisnickoIme, lozinka, prava)VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($dbc);
            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, 'sssss', $name, $prezime, $ime, $hashed_password, $prava);
                mysqli_stmt_execute($stmt);
            }
            header("Location: pocetna.php");
        }
    }
    
?>