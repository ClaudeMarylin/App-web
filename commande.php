<?php
include 'entete.php';

if(!empty($_GET['idcommande'])){
  $article = getCommande($_GET['idcommande']);
}

?>
<div class="home-content">
      <div class="overview-boxes">
        <div class="box">
            <form  class="rito" action="<?= !empty($_GET['idarticle']) ? "./modiCommande.php" : "./ajoutCommande.php"?>" method="post">

                <input   value="<?= !empty($_GET['idarticle']) ? $article['idarticle'] : ""?>" type="hidden" name="idarticle" id="idarticle" >

                <label for="idarticle">article</label>
                <select name="idarticle" id="idarticle">
               <?php 

                 $articles = getArticle();
                 if(!empty($articles) && is_array($articles)){
                    foreach($articles as $key => $value){
                        ?>
                        <option data-prix="<?= $value['prix_unitaire'] ?>"   value="<?= $value['idarticle'] ?>"><?= $value['nomarticle']." - ".$value['quantite']." disponibles"?></option>
                        <?php
                    }
                 }
               ?>
                </select>

                <label for="idfournisseur">fournisseur</label>
                <select name="idfournisseur" id="idfournisseur">
               <?php 

                 $fournisseurs = getFournisseur();
                 if(!empty($fournisseurs) && is_array($fournisseurs)){
                    foreach($fournisseurs as $key => $value){
                        ?>
                        <option value="<?= $value['idfournisseur'] ?>"><?= $value['nomfournisseur']."- ".$value['prenomfournisseur'] ?></option>
                        <?php
                    }
                 }
               ?>
                </select>

                <label for="quantite">Quantite</label>
                <input onkeyup ="setprix()" value="<?= !empty($_GET['idarticle']) ? $article['quantite'] : ""?>" type="number" name="quantite" id="quantite" placeholder="veuillez saisir la quantite">
                
                
                <label for="prix">prix</label>
                <input   value="<?= !empty($_GET['idarticle']) ? $article['prix'] : ""?>"type="number" name="prix" id="prix" placeholder="veuillez saisir le prix">

                
               
                <button type="submit" >valider</button>
                
                <?php
                
                if (!empty($_SESSION['message']['text'])) 
                {
                    ?>
                    
                    <div class="alert " >
                    
                    <?=$_SESSION['message']['type']?>
                    
                    </div>
                <?php
                   
                }
                ?>   
             
            </form>
        </div>
<div class="box">

<table class="mtable">
    <tr>
        <th>article</th>
        <th>fournisseur</th>
        <th>quantite</th>
        <th>prix </th>
        <th>date </th>

        
        
        
    </tr>
    <?php
    $commandes= getCommande();
  
    if(!empty($commandes) && is_array($commandes)){
            foreach($commandes as $key => $value){

        ?>
        <tr>
           <td><?= $value['nomarticle'] ?></td>
           <td><?= $value['nomfournisseur']." ".$value['prenomfournisseur'] ?></td>
           <td><?= $value['quantite'] ?></td>
           <td><?= $value['prix'] ?></td>
           <td><?= date('d/m/Y H:i:s', strtotime($value['datecommande']))?></td>
        </td>
        
        </tr> 
            
                <?php
        }
        
    }
    ?>
</table>
</div>

      </div> 

      </div>
    </section>
    <?php
include 'pied.php';

?>
<script>

    function annuleVente(idvente, idarticle, quantite){
        if(confirm("voulez vous vraiment annuler cette commandes$commandes?")){
            window.location.href = "./annuleVente.php?idvente="+idvente+"&idarticle="+idarticle+"&quantite="+ quantite;
        }
    }

    function setprix(){
       var article = document.querySelector('#idarticle');
       var quantite = document.querySelector('#quantite');
       var prix = document.querySelector('#prix');

        var prixunitaire = article.options[article.selectedIndex].getAttribute('data-prix');

        prix.value = Number(quantite.value) * Number(prixunitaire);
    }

    </script>
    
    