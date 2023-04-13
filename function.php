<?php
include 'connexion.php';

function getArticle($id=null){
    if(!empty($id)){
        $sql = " SELECT * FROM article WHERE idarticle=?";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute(array($id));
        return $req->fetch();
    }
    
     else{
        $sql = " SELECT * FROM article";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll() ;
    }
}

function getClient($id=null){
    if(!empty($id)){
        $sql = " SELECT * FROM client WHERE idclient=?";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute(array($id));
        return $req->fetch();
    }
    
     else{
        $sql = " SELECT * FROM client";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll() ;
      } 
    
}

    
// function updateEntity($table,$params,$id,$idName){
//         $setClause = '';
//         $values = [];

//         foreach ( $params as $key => $value){
//             $setClause.= "$key = ? ,";
//             $values[] = $value ;
//         }
//         $trimClause = trim($setClause,",");
//         $sql = "UPDATE $table SET $trimClause WHERE $idName = $id";
//         $stmt = $pdo->prepare($sql);
//         $stmt->execute($values);

//        }

// function deleteEntity ($tableName, $id, $idname){
//         $sql = " DELETE FROM $tableName WHERE $idname = $id";
//         $stmt = $pdo->prepare($sql);
//         $stmt->execute();
//        }


function getVente($id=null){
    if(!empty($id)){
        $sql = " SELECT idvente, prix_unitaire,adresseclient,telephoneclient, nomarticle, nomclient, prenomclient, v.quantite, prix, date_vente FROM client AS c, vente AS v, article AS a WHERE v.idarticle=a.idarticle AND v.idclient=c.idclient AND v.idvente=? AND etat=?";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute(array($id,1));
        return $req->fetch();
    }
    
     else{
        $sql = " SELECT v.idarticle,a.idarticle, idvente,nomarticle, nomclient, prenomclient, v.quantite, prix, date_vente FROM client AS c, vente AS v, article AS a WHERE v.idarticle=a.idarticle AND v.idclient=c.idclient AND etat=?";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute(array(1));
        return $req->fetchAll() ;
      } }


      function getFournisseur($id=null){
        if(!empty($id)){
            $sql = " SELECT * FROM fournisseur WHERE idfournisseur=?";
            $req = $GLOBALS['connexion']->prepare($sql);
            $req->execute(array($id));
            return $req->fetch();
        }
        
         else{
            $sql = " SELECT * FROM fournisseur";
            $req = $GLOBALS['connexion']->prepare($sql);
            $req->execute();
            return $req->fetchAll() ;
          } }
   
          
          function getCommande($id=null){
            if(!empty($id)){
                $sql = " SELECT idcommande, prix_unitaire,adressefournisseur,telephonefournisseur, nomfournisseur, nomfournisseur, prenomfournisseur, co.quantite, prix, datecommande
                 FROM fournisseur AS f, commande AS co, article AS a WHERE co.idarticle=a.idarticle AND co.idfournisseur=f.idfournisseur AND co.idcommande=?";
                $req = $GLOBALS['connexion']->prepare($sql);
                $req->execute(array($id));
                return $req->fetch();
            }
            
             else{
                $sql = " SELECT co.idarticle,a.idarticle, idcommande,nomarticle, nomfournisseur, prenomfournisseur, co.quantite, prix, datecommande
                FROM fournisseur AS f, commande AS co, article AS a WHERE co.idarticle=a.idarticle AND co.idfournisseur = f.idfournisseur ";
                $req = $GLOBALS['connexion']->prepare($sql);
                $req->execute();
                return $req->fetchAll() ;
              } }

function getAllCommande(){

    $sql = "SELECT COUNT(*) AS nbre FROM commande";
    $req = $GLOBALS['connexion']->prepare($sql);
    $req->execute();
    return $req->fetch();
}

function getAllVente(){

    $sql = "SELECT COUNT(*) AS nbre FROM vente WHERE etat =?" ;
    $req = $GLOBALS['connexion']->prepare($sql);
    $req->execute(array(1));
    return $req->fetch();
}



function getAllArticle(){

    $sql = "SELECT COUNT(*) AS nbre FROM article" ;
    $req = $GLOBALS['connexion']->prepare($sql);
    $req->execute();
    return $req->fetch();
}

function getCA(){

    $sql = "SELECT SUM(prix) AS prix FROM vente" ;
    $req = $GLOBALS['connexion']->prepare($sql);
    $req->execute();
    return $req->fetch();
}


function getLastVente(){
   
    
     
        $sql = " SELECT v.idarticle,a.idarticle, idvente,nomarticle, nomclient, prenomclient, v.quantite, prix, date_vente
         FROM client AS c, vente AS v, article AS a WHERE v.idarticle=a.idarticle AND v.idclient=c.idclient AND etat=? ORDER BY date_vente DESC LIMIT 10";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute(array(1));
        return $req->fetchAll() ;
      } 

      function getMostVente(){
   
        $sql = " SELECT nomarticle, prix
         FROM client AS c, vente AS v, article AS a WHERE v.idarticle=a.idarticle AND v.idclient=c.idclient AND etat=? 
         GROUP BY a.idarticle
         ORDER BY SUM(prix) DESC LIMIT 10";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute(array(1));
        return $req->fetchAll() ;
      } 

    

    function getCommandeClient($id=null){
        if(!empty($id)){
            $sql = " SELECT * FROM commande_client WHERE id=?";
            $req = $GLOBALS['connexion']->prepare($sql);
            $req->execute(array($id));
            return $req->fetch();
        }
        
         else{
            $sql = " SELECT * FROM commande_client";
            $req = $GLOBALS['connexion']->prepare($sql);
            $req->execute();
            return $req->fetchAll() ;
          } 
        
    }

?>

