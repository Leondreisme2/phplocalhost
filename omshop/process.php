<?php
include "conn.php";

// This code is for registration
if(isset($_POST['reg'])){
    // echo "this is Reg!"; ging comment ko nlng kay gina pa delete ni sir

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    
    // gina pa delete kay para sa bag ohanon lng
    // echo $fn."</br>";
    // echo $ln."</br>";
    // echo $email."</br>";
    // echo $pass."</br>";

    //insert data in your db
    $insert = mysqli_query($conn, "INSERT INTO customers VALUES('0', '$fn', '$ln', '$email', '$pass')");
    echo "Successfull Registration";
    
}




?>