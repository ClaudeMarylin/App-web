<?php
include 'connexion.php';
    
if(
    
     !empty($_POST['nomfournisseur'])
    && !empty($_POST['prenomfournisseur'])
    && !empty($_POST['telephonefournisseur'])
    && !empty($_POST['adressefournisseur'])
   
 ){
    $sql = " INSERT INTO fournisseur(nomfournisseur,prenomfournisseur,telephonefournisseur,adressefournisseur) VALUES(?,?,?,?)";
    $req = $connexion->prepare($sql);

    $req->execute(array(
    
        
        $_POST['nomfournisseur'],
        $_POST['prenomfournisseur'],
        $_POST['telephonefournisseur'],
        $_POST['adressefournisseur']
       
    ));
    
    if($req->rowcount()!=0){
        $_SESSION['message']['text'] = "fournisseur ajoute avec success";
        $_SESSION['message']['type'] = "success fournisseur enregistre";
    }
    else{
        $_SESSION['message']['text'] = "une erreur s'est produite lors de l'ajout d'un fournisseur";
        $_SESSION['message']['type'] = "danger veuillez saisir tous les champs";
       
    }
}else{
    $_SESSION['message']['text']=  "une information obligatoire non renseignee";
    $_SESSION['message']['type']= "danger information obligatoire non-renseignee"; 
}

header('location: ./fournisseur.php');

?>


