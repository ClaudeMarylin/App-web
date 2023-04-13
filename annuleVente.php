<?php
include 'connexion.php';

if(
    !empty($_GET['idvente'])&&
    !empty($_GET['idarticle'])&&
    !empty($_GET['quantite'])
    ){
        $sql = "UPDATE vente SET etat=? WHERE idvente=?";
        $req = $connexion->prepare($sql);
        $req->execute(array(0,$_GET['idvente']));
        
        if($req->rowcount()!=0){
            $sql = "UPDATE article SET quantite = quantite+? WHERE idarticle=?";
            $req = $connexion->prepare($sql);
            $req->execute(array($_GET['quantite'],$_GET['idarticle']));
        }
    }

    header('location: ./vente.php');