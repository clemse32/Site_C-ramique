<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css" />
    <script type="text/javascript" src="../JS/index.js"></script>

    <title>Annie B. Céramique</title>
</head>
<body>
    <?php include "Header.PHP"; ?>

    <?php include "nav.HTML"; ?>

    <h1>Compte Administration</h1>

    <section>
    <h2>Modification des images du Carrousel</h2>
    <div id="imageList">
        <?php
        $carrouselDirectory = '../Image/Carroussel';
        $images = glob($carrouselDirectory . '/*');

        foreach ($images as $image) {
            echo '<div class="image-container">';
            echo '<img src="' . $image . '" alt="Image du carrousel">';
            echo '<button class="delete-image-button" data-image="' . $image . '">Supprimer</button>';
            echo '</div>';
        }
        ?>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var deleteImageButtons = document.querySelectorAll(".delete-image-button");

        deleteImageButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                var imageSrc = button.getAttribute("data-image");

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "supprimer_image.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        if (xhr.responseText === "success") {
                            // Supprimer l'image du DOM côté client
                            button.parentNode.remove();
                        } else {
                            alert("Erreur lors de la suppression de l'image.");
                        }
                    }
                };

                xhr.send("image_src=" + imageSrc);
            });
        });
    });
</script>


    <section>
        <h2>Récupération des avis</h2>
        <?php
        if (isset($_SESSION["loggedin"])) {
        } else {
            echo "Pas de session en cours";
        }
        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            $connect = mysqli_connect("127.0.0.1", "root", "", "ceramique" );
            
        
            $sql ="SELECT * FROM avis_message";
            $result = $connect->query($sql);
        
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Prénom</th><th>Nom</th><th>Mail</th><th>Message</th></tr>";
            
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Prenom"] . "</td>";
                    echo "<td>" . $row["Nom"] . "</td>";
                    echo "<td>" . $row["Mail"] . "</td>";
                    echo "<td>" . $row["Message"] . "</td>";
                    echo "<td>";
                    echo "<button class='delete-button' data-message-id='" . $row["ID"] . "'>Supprimer</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                    
                   
                }
            
                echo "</table>";
            } else {
                echo "Aucune donnée trouvée dans la table.";
            }
            
        
        
        mysqli_close($connect);
        
        }
        ?>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var deleteButtons = document.querySelectorAll(".delete-button");

            deleteButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    var messageID = button.getAttribute("data-message-id");

                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "supprimer_message.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            if (xhr.responseText === "success") {
                                button.closest("tr").style.display = "none";
                            } else {
                                alert("Erreur lors de la suppression du message.");
                            }
                        }
                    };

                    xhr.send("message_id=" + messageID);
                });
            });
        });
    </script>

    <?php include "Footer.HTML"; ?>
</body>
</html>
