<?php
    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO ('mysql:host=localhost;dbname=ceramique', 'root','',$pdo_options);
        echo "ça marche";
        } catch(Exception $ex) {
        die("Erreur: ".$ex->getMessage());
        }
?>