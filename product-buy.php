<?php 
    include_once 'database.php';

    $Name = $_POST['Name'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $Landmark = $_POST['Landmark'];
    $Product = $_POST['Product'];

    $sql = "INSERT INTO posts(Name, phno, email, address, Landmark, Product) 
                VALUES ('$Name', '$phno', '$email', '$address', '$Landmark', '$Product');";
    mysqli_query($Conn, $sql);

    header("Location: product-1.html");
