<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Style/style.css" />


    <title>Annie B. Céramique</title>
</head>
<body>
    <?php 
    include("Header.HTML");
    include("navConnexion.HTML");
    ?>

    <h1>Compte Administration</h1>

    <section>
    <h2>Ajouter/Supprimer des images du Carrousel</h2>
    <form enctype="multipart/form-data" method="post" action="upload_image.php">
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Ajouter l'image</button>
    </form>

    <div class="carousel-images">
        <?php
    
        $carouselImagesDir = "../Image/Carroussel/";
        $carouselImages = scandir($carouselImagesDir);
        
        foreach ($carouselImages as $image) {
            if (!in_array($image, array(".", ".."))) {
                echo '<div class="carousel-image">';
                echo '<img src="' . $carouselImagesDir . $image . '" alt="Image de Carrousel">';
                echo '<button class="delete-image-button" data-image="' . $carouselImagesDir . $image . '">Supprimer</button>';
                echo '</div>';
            }
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
       
        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            $connect = mysqli_connect("mysql-ceramique.alwaysdata.net", "ceramique", "Clement32!", "ceramique_bdd" );
            
        
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

    <?php 
    include("Footer.HTML"); 
    ?>
</body>
</html>
