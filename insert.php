<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        require_once("connect.php");

        $nm = $_POST['nom'];
        $em = $_POST['email'];
        $mt = $_POST['mot_passe'];
        $ad = $_POST['adresse'];
        
        $SQL = "INSERT INTO nouveau_client(id_nouveau_client, nom_nouveau_client, email_nouveau_client, mot_de_passe, adresse_nouveau_client, typeUser) 
                values('', '$nm', '$em', '$mt', '$ad', 'client');";
        mysqli_query($conn, $SQL);

        /* Verification si l'utilisateur a bien ete inserer */
        $ver = mysqli_insert_id($conn);
        if(!empty($ver)){
            echo "Inscription reussie !!";
            header("Location: index.php");
        }else{
            echo "Erreur d'inscription !!";
        }
    }
?>
