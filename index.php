<?php
    $check = true;
    
    $username = $_POST ["username"]; 
    $password = $_POST ["password"];
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
    if($username){
        $usernameError = "";
        $check = true;
    }
    
    if (!ctype_alnum ($username) ) {  
        $usernameError = "Username must be alphanumeric"; 
        $check = false;
    }

    if (empty ($username)) {  
        $usernameError = "Error! Username cannnot be blank";
        $check = false;
    }
    
    if($password){
        $passwordError = "";
        $check = true;
    }
    
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $passwordError = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
        echo "\n".$passwordError;
        $check = false;
    }    
    
    if (empty ($password)) {  
        $passwordError = "Error! Password cannnot be blank";
        $check = false;
    }
    
    include('login.php');
      
?>

