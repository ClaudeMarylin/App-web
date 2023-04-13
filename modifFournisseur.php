<?php
include 'connexion.php';
    
if(
    
    !empty($_POST['nomfournisseur'])
    && !empty($_POST['prenomfournisseur'])
    && !empty($_POST['telephonefournisseur'])
    && !empty($_POST['adressefournisseur'])
     && !empty($_POST['idfournisseur'])
   
 ){
    $sql = " UPDATE fournisseur SET nomfournisseur= ? , prenomfournisseur= ?, telephonefournisseur=? ,adressefournisseur=? WHERE idfournisseur=?";
    $req = $connexion->prepare($sql);

    $req->execute(array(
    
       
        $_POST['nomfournisseur'],
        $_POST['prenomfournisseur'],
        $_POST['telephonefournisseur'],
        $_POST['adressefournisseur'],
        $_POST['idfournisseur']
       
    ));
    
    if($req->rowcount()!=0){
        $_SESSION['message']['text'] = "fournisseur modifie avec success";
        $_SESSION['message']['type'] = "success fourniseur modifie";
    }
    else{
        $_SESSION['message']['text'] = "une erreur s'est produite lors de la modification d'un fournisseur";
        $_SESSION['message']['type'] = "danger veuillez saisir tous les champs";
       
    }
}else{
    $_SESSION['message']['text']=  "une information obligatoire non renseignee";
    $_SESSION['message']['type']= "danger : modification non-effectuee "; 
}

header('location: ./fournisseur.php');

?>


