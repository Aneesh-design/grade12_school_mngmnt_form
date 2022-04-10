<?php

session_start();

    $server = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "student_reg";

    $conn =  mysqli_connect($server, $username, $password, $database);
    if ($conn) {
        $username = $_GET['getId'];
        
        $query = "DELETE FROM `register` WHERE username like '%$username%'";
        $result = mysqli_query($conn, $query);
        if (!$result){
         header('location:../html/delete.html');
        
        } else {
         header('location:../html/view.php');
        
        }
        
        
    }
    else{
        die("Error". mysqli_connect_error());
    }
    
?>