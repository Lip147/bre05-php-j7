<?php
    $password = $_POST['password'];

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    echo "<h2>Résultat :</h2>";
    echo "Mot de passe original : " .$password . "<br><br>";
    echo "Mot de passe chiffré : " . $hashPassword;
?>