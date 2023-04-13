<?php
include 'connexion.php';

if(
    !empty($_POST['nomarticle'])
    && !empty($_POST['categorie'])
    && !empty($_POST['quantite'])
    && !empty($_POST['prix_unitaire'])
    && !empty($_POST['date_fabrication'])
    && !empty($_POST['date_expiration'])
    && !empty($_POST['idarticle'])
 ){
    $sql = " UPDATE article SET nomarticle=?, categorie = ?, quantite = ?,prix_unitaire =?, date_fabrication=?,date_expiration=? WHERE idarticle=?";
    $req = $connexion->prepare($sql);

    $req->execute(array(
        $_POST['nomarticle'],
        $_POST['categorie'],
        $_POST['quantite'],
        $_POST['prix_unitaire'],
        $_POST['date_fabrication'],
        $_POST['date_expiration'],
        $_POST['idarticle']
    ));
    
    if($req->rowcount()!=0){
        $_SESSION['message']['text'] = "article modifie  avec success";
        $_SESSION['message']['type'] = "success :article modifie";
    }
    else{
        $_SESSION['message']['text'] = "rien n'a ete modifie";
        $_SESSION['message']['type'] = "warning : rien n'a ete modifie";
       
    }
}else{
    $_SESSION['message']['text']=  "une information obligatoire non renseignee";
    $_SESSION['message']['type']= "danger veuillez saisir tous les champs svp"; 
}

header('location: ./article.php');

?>