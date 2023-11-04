<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css" />
    <script type="text/javascript" src="../JS/index.js"></script>

    <title>Annie B. Céramique</title>
    <?php
    include "./Asset/Header.PHP";
    ?>
</head>
<?php
include "./Asset/nav.HTML";
?>
<body>
    <h1>Compte Administration</h1>
    <section>
        <h2>Modification des images du Carrousel</h2>
        <div id="imageList">Images du Carrousel</div>
        <div id="validationStatus"></div>
        <button id="charge_image">Charger les images</button>
    </section>
    <section>
        <h2>Récupération des avis</h2>
        <?php
session_start();
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
</body>

<footer>
<?php
     include "Asset/Footer.HTML";
?>
</footer>

</html>
