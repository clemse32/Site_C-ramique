<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" />
    <title>Annie B. Céramique - Connexion</title>
</head>

<body>

    <?php
    include "./Asset/Header.HTML";
    ?>

    <?php
    include "./Asset/nav.HTML";
    ?>

    <section>
        <h2>Administration</h2>

        <form action="login.php" method="post">
            <label for="login">Nom d'utilisateur:</label>
            <input type="text" id="login" name="login" required>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se connecter</button>
        </form>

    </section>
    
    <footer>
        <?php
        include "Asset/Footer.HTML";
        ?>
    </footer>

</body>

</html>
