<?php

include_once 'function.php';

if(
       !empty($_POST['idarticle'])
    && !empty($_POST['idfournisseur'])
    && !empty($_POST['quantite'])
    && !empty($_POST['prix'])
   
 ){
    

    $sql = " INSERT INTO commande(idarticle,idfournisseur,quantite,prix) VALUES(?,?,?,?)";
    $req = $connexion->prepare($sql);

    $req->execute(array(
        $_POST['idarticle'],
        $_POST['idfournisseur'],
        $_POST['quantite'],
        $_POST['prix']
        
    ));
    
    if($req->rowcount()!=0){

$sql = "UPDATE article SET  quantite = quantite+? WHERE idarticle =?";
$req = $connexion -> prepare($sql);

$req -> execute(array(
$_POST['quantite'],
$_POST['idarticle'],
));

if($req->rowcount()!=0){
    $_SESSION['message']['text'] = "commande effectue avec scceess";
    $_SESSION['message']['type'] = "commande effectue avec success";
}else{
    $_SESSION['message']['text'] = "impossible de faire cette commande";
    $_SESSION['message']['type'] = "impossible de faire cette commande";
}

       
    }
    else{
        $_SESSION['message']['text'] = "une erreur s'est produite lors de la commande";
        $_SESSION['message']['type'] = "une erreur s'est produite lors de la commande";
       
    }
}

 
   
else{
    $_SESSION['message']['text']=  "une information obligatoire non renseignee";
    $_SESSION['message']['type']= "danger veuillez saisir tous les champs svp"; 
}

header('location: ./commande.php');

?>