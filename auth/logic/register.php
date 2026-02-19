<?php
    
    require '../connexion.php';
    
    if (
        isset($_POST['first_name']) &&
        isset($_POST['last_name']) &&
        isset($_POST['email']) &&
        isset($_POST['password'])
    ) {
    
        $firstName = trim($_POST['first_name']);
        $lastName  = trim($_POST['last_name']);
        $email     = trim($_POST['email']);
        $password  = $_POST['password'];
    
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    
        $query = $db->prepare("
            INSERT INTO users (first_name, last_name, email, password)
            VALUES (:first_name, :last_name, :email, :password)
        ");
    
        $query->execute([
            'first_name' => $firstName,
            'last_name'  => $lastName,
            'email'      => $email,
            'password'   => $hashPassword
        ]);
    
        header('Location: ../index.php?route=home');
        exit();
    }
?>