<?php
include 'connexion.php';
    
if(
    
    !empty($_POST['nomclient'])
    && !empty($_POST['prenomclient'])
    && !empty($_POST['telephoneclient'])
    && !empty($_POST['adresseclient'])
     && !empty($_POST['idclient'])
   
 ){
    $sql = " UPDATE client SET nomclient= ? , prenomclient= ?, telephoneclient=? ,adresseclient=? WHERE idclient=?";
    $req = $connexion->prepare($sql);

    $req->execute(array(
    
       
        $_POST['nomclient'],
        $_POST['prenomclient'],
        $_POST['telephoneclient'],
        $_POST['adresseclient'],
        $_POST['idclient']
       
    ));
    
    if($req->rowcount()!=0){
        $_SESSION['message']['text'] = "client modifie avec success";
        $_SESSION['message']['type'] = "success client modifie";
    }
    else{
        $_SESSION['message']['text'] = "une erreur s'est produite lors de la modification d'un client";
        $_SESSION['message']['type'] = "danger veuillez saisir tous les champs";
       
    }
}else{
    $_SESSION['message']['text']=  "une information obligatoire non renseignee";
    $_SESSION['message']['type']= "danger : modification non-effectuee "; 
}

header('location: ./client.php');

?>


