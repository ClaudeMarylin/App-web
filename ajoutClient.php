<?php
include 'connexion.php';
    
if(
    
     !empty($_POST['nomclient'])
    && !empty($_POST['prenomclient'])
    && !empty($_POST['telephoneclient'])
    && !empty($_POST['adresseclient'])
   
 ){
    $sql = " INSERT INTO client(nomclient,prenomclient,telephoneclient,adresseclient) VALUES(?,?,?,?)";
    $req = $connexion->prepare($sql);

    $req->execute(array(
    
        
        $_POST['nomclient'],
        $_POST['prenomclient'],
        $_POST['telephoneclient'],
        $_POST['adresseclient']
       
    ));
    
    if($req->rowcount()!=0){
        $_SESSION['message']['text'] = "client ajoute avec success";
        $_SESSION['message']['type'] = "success client enregistre";
    }
    else{
        $_SESSION['message']['text'] = "une erreur s'est produite lors de l'ajout d'un client";
        $_SESSION['message']['type'] = "danger veuillez saisir tous les champs";
       
    }
}else{
    $_SESSION['message']['text']=  "une information obligatoire non renseignee";
    $_SESSION['message']['type']= "danger information obligatoire non-renseignee"; 
}

header('location: ./client.php');

?>


