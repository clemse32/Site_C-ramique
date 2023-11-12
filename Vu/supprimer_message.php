<?php
if (isset($_POST["message_id"])) {
    $message_id = $_POST["message_id"];

    $connect = mysqli_connect("mysql-ceramique.alwaysdata.net", "ceramique", "Clement32!", "ceramique_bdd" );

    $sql = "DELETE FROM avis_message WHERE ID = $message_id";
    if ($connect->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "Erreur de la suppression du message : " . $connect->error;
    }

    mysqli_close($connect);
}
?>
