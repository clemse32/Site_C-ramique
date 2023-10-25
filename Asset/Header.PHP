<header>
        <h1>Annie B. Céramique</h1>
        <?php

        if (isset($_SESSION['user_id'])) {
            
            echo '<a href="deconnexion.php"><button class="Connexion">Déconnexion</button></a>';
        } else {
            
            echo '<a href="Connexion.php"><button class="Connexion">Connexion</button></a>';
        }
        ?>

 </header>