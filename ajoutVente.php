<?php

include_once 'function.php';

if(
       !empty($_POST['idarticle'])
    && !empty($_POST['idclient'])
    && !empty($_POST['quantite'])
    && !empty($_POST['prix'])
   
 ){
    $article = getArticle($_POST['idarticle']);
if(!empty($article) && is_array($article)){
     if($_POST['quantite'] > $article['quantite']){

        $_SESSION['message']['text'] = "la quantite a vendre n'est pas disponible";
        $_SESSION['message']['type'] = "la quantite a vendre n'est pas disponible";
}else{
    $sql = " INSERT INTO vente(idarticle,idclient,quantite,prix) VALUES(?,?,?,?)";
    $req = $connexion->prepare($sql);

    $req->execute(array(
        $_POST['idarticle'],
        $_POST['idclient'],
        $_POST['quantite'],
        $_POST['prix']
        
    ));
    
    if($req->rowcount()!=0){

$sql = "UPDATE article SET  quantite = quantite-? WHERE idarticle =?";
$req = $connexion -> prepare($sql);

$req -> execute(array(
$_POST['quantite'],
$_POST['idarticle'],
));

if($req->rowcount()!=0){
    $_SESSION['message']['text'] = "vente effectue avec scceess";
    $_SESSION['message']['type'] = "vente effectue avec success";
}else{
    $_SESSION['message']['text'] = "impossible de faire cette vente";
    $_SESSION['message']['type'] = "impossible de faire cette vente";
}

       
    }
    else{
        $_SESSION['message']['text'] = "une erreur s'est produite lors de la vente";
        $_SESSION['message']['type'] = "une erreur s'est produite lors de la vente";
       
    }
}
}
 }
   
else{
    $_SESSION['message']['text']=  "une information obligatoire non renseignee";
    $_SESSION['message']['type']= "danger veuillez saisir tous les champs svp"; 
}

header('location: ./vente.php');

?>