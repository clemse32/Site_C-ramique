<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css" />
    <title>Annie B. Céramique - Connexion</title>
</head>


<body>

    <?php
    include "Header.PHP";
    ?>

    <?php
    include "nav.HTML";
    ?>

    <section>
        <h2>Administration</h2>

        <form action="login.php" method="post">
            <label for="login">Nom d'utilisateur:<br></label>
            <input type="text" id="login" name="login" required>
            <br>
            <label for="password">Mot de passe:<br></label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Se connecter</button>
    
        </form>

    </section>
    
    <footer class ="footer">
        <?php
        include "Footer.HTML";
        ?>
    </footer>

</body>

</html>
