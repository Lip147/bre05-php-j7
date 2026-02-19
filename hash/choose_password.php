<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Choisir un mot de passe</title>
    </head>
    <body>
        <h2>Choisissez un mot de passe</h2>
        <form action="hash_password.php" method="POST">
            <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
            <button type="submit">Valider</button>
        </form>
    </body>
</html>
