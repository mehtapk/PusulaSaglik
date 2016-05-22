<?php
    $con = mysqli_connect("mysql12.000webhost.com", "a3470241_mehtap", "mehtap23", "a3470241_logreg");
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_id, $name, $username, $age, $password, $gender);
    
    $response = array();
    $response["success"] = true;  
    
    while(mysqli_stmt_fetch($statement)){
 
        $response["name"] = $name;
        $response["username"] = $username;
        $response["age"] = $age;
        $response["password"] = $password;
        $gender = $_POST["gender"];
    }
    
    echo json_encode($response);
    mysqli_stmt_close($statement);
		
	mysqli_close($con);
?>