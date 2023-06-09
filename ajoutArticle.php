<?php
include 'connexion.php';

if(
    !empty($_POST['nomarticle'])
    && !empty($_POST['categorie'])
    && !empty($_POST['quantite'])
    && !empty($_POST['prix_unitaire'])
    && !empty($_POST['date_fabrication'])
    && !empty($_POST['date_expiration'])
 ){
    $sql = " INSERT INTO article(nomarticle,categorie,quantite,prix_unitaire,date_fabrication,date_expiration) VALUES(?,?,?,?,?,?)";
    $req = $connexion->prepare($sql);

    $req->execute(array(
        $_POST['nomarticle'],
        $_POST['categorie'],
        $_POST['quantite'],
        $_POST['prix_unitaire'],
        $_POST['date_fabrication'],
        $_POST['date_expiration']
    ));
    
    if($req->rowcount()!=0){
        $_SESSION['message']['text'] = "article ajoute avec success";
        $_SESSION['message']['type'] = "success :article ajoute";
    }
    else{
        $_SESSION['message']['text'] = "une erreur s'est produite lors de l'ajout de l'article";
        $_SESSION['message']['type'] = "danger veuillez saisir tous les champs";
       
    }
}else{
    $_SESSION['message']['text']=  "une information obligatoire non renseignee";
    $_SESSION['message']['type']= "danger veuillez saisir tous les champs svp"; 
}

header('location: ./article.php');

?>