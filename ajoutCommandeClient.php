<?php
include 'connexion.php';
    
if(
    
     !empty($_POST['nom_clt'])
    && !empty($_POST['nom_article'])
    && !empty($_POST['caracteristiques'])
    && !empty($_POST['qte_voulue'])
 ){
    $sql = " INSERT INTO commande_client(nom_clt,nom_article,caracteristiques,qte_voulue) VALUES(?,?,?,?)";
    $req = $connexion->prepare($sql);

    $req->execute(array(
        $_POST['nom_clt'],
        $_POST['nom_article'],
        $_POST['caracteristiques'],
        $_POST['qte_voulue']
    ));
    
    if($req->rowcount()!=0){
        $_SESSION['message']['text'] = "Votre commande a ete ajoutee avec succes";
        $_SESSION['message']['type'] = "Votre commande a ete ajoutee avec succes";
    }
    else{
        $_SESSION['message']['text'] = "une erreur s'est produite lors de la passation de votre commande";
        $_SESSION['message']['type'] = "danger veuillez saisir tous les champs";
       
    }
}else{
    $_SESSION['message']['text']=  "une information obligatoire non renseignee";
    $_SESSION['message']['type']= "information obligatoire non-renseignee"; 
}

header('location: cote_client/commande_client.php');

?>
