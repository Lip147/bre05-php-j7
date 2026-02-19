<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Tester un mot de passe</title>
    </head>
    <body>
        <h2>Vérifier un mot de passe</h2>
        <form action="decrypt_password.php" method="POST">
            <label>Mot de passe en clair :</label><br>
            <input type="password" name="password" required><br><br>
            <label>Mot de passe chiffré :</label><br>
            <input type="text" name="hash" required><br><br>
            <button type="submit">Vérifier</button>
        </form>
    </body>
</html>
