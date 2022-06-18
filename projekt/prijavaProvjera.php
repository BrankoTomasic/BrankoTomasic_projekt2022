<?php
session_start();
    if(isset($_POST['ime']) && isset($_POST['lozinka'] )){
        $ime = $_POST['ime'];
        $pass = $_POST['lozinka'];


        $dbc = mysqli_connect('localhost','root','','projekt2022') or 
        die("Error connecting to database".mysqli_connect_error());
        $sql = "SELECT lozinka, prava FROM korisnik WHERE korisnickoIme = ?";
        $stmt = mysqli_stmt_init($dbc);
        
        $level;
        $lozinka;
        if(mysqli_stmt_prepare($stmt, $sql)){
            mysqli_stmt_bind_param($stmt,"s", $ime);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
        }
        mysqli_stmt_bind_result($stmt, $lozinka, $level);
        mysqli_stmt_fetch($stmt);
        if(password_verify($pass, $lozinka)){
            
            $_SESSION['korisnickoIme'] = $ime;
            if($level == "administrator"){
               
                header("Location: administracija.php");

            }
            else{
                header("Location: korisnik.php");
            }
        }
        else{
            echo"<p>Ne postoji korisnik sa tim podacima, molimo registrirajte se na sljedećem linku - <a href='registracija.php'>registracija</a></p>";
        }


    }
    
    
?>