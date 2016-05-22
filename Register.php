<?php
    $con = mysqli_connect("mysql12.000webhost.com", "a3470241_mehtap", "mehtap23", "a3470241_logreg");
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];

    $statement = mysqli_prepare($con, "INSERT INTO user (name, username, age, password, gender) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssis", $name, $username, $age, $password, $gender);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>