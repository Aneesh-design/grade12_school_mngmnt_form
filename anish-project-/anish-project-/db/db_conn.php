<?php

session_start();
header('location:../html/index.html');
    $server = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "student_reg";

    $conn =  mysqli_connect($server, $username, $password, $database);
    if ($conn) {
        $username = $_POST['user1'];
        $email = $_POST["email"];
        $phnumber = $_POST["number"];
        $location1 = $_POST["location"];
        $fname1 = $_POST["fathername"];
        $mname1 = $_POST["mothername"];
        $dob1 = $_POST["dob"];
        $userchk = "select * from register where username =  '$username'";
        
        $result = mysqli_query($conn, $userchk);
        $num = mysqli_num_rows($result);
        echo $name;
        if ($num == 1){
            echo "Username is ALready Taken";
        }
        else {
            $reg = "insert into register(username, email, phnumber, location1, fname1, mname1, dob1) values ('$username', '$email', '$phnumber', '$location1', '$fname1', '$mname1', '$dob1')";
            mysqli_query($conn, $reg);
            header('location:../html/view.php');
        }
    }
    else{
        die("Error". mysqli_connect_error());
    }
    

?>