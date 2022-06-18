<?php
    $id = $_GET['id'];
    $dbc = mysqli_connect('localhost','root','','projekt2022') or 
    die("Error connecting to database".mysqli_connect_error());
    $query = "DELETE  FROM vijesti WHERE id = $id";
    $result = mysqli_query($dbc,$query);
    header('Location: administracija.php');
    mysqli_close($dbc);
?>