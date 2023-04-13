<?php
include 'entete.php';

if(!empty($_GET['idarticle'])){
  $article = getArticle($_GET['idarticle']);
}

?>
<div class="home-content">
      <div class="overview-boxes">
        <div class="box">
            <form class="rito"  action="<?= !empty($_GET['idarticle']) ? "./modifArticle.php" : "./ajoutArticle.php"?>" method="post">

                <label for="nomarticle">nom de l'article</label>
                <input   value="<?= !empty($_GET['idarticle']) ? $article['nomarticle'] : ""?>" type="text" name="nomarticle" id="nomarticle" placeholder="veuillez saisir le nom">
                <input   value="<?= !empty($_GET['idarticle']) ? $article['idarticle'] : ""?>" type="hidden" name="idarticle" id="idarticle" >

                <label for="categorie">categorie</label>
                <select name="categorie" id="categorie">
                <option <?= !empty($_GET['idarticle']) && $article['categorie']== "Ordinateur"? "selected" : ""?> value="Ordinateur">Ordinateur</option>
                <option <?= !empty($_GET['idarticle']) && $article['categorie']== "Imprimante"? "selected" : ""?> value="Imprimante">Imprimante</option>
                <option <?= !empty($_GET['idarticle']) && $article['categorie']== "Accessoire"? "selected" : ""?> value="Accessoire">Accessoire</option>
                
                </select>

                <label for="quantite">Quantite</label>
                <input  value="<?= !empty($_GET['idarticle']) ? $article['quantite'] : ""?>" type="number" name="quantite" id="quantite" placeholder="veuillez saisir la quantite">
                
                
                <label for="prix_unitaire">prix unitaire</label>
                <input   value="<?= !empty($_GET['idarticle']) ? $article['prix_unitaire'] : ""?>"type="number" name="prix_unitaire" id="prix_unitaire" placeholder="veuillez saisir le prix">

                
                <label for="date_fabrication">date de fabrication</label>
                <input  value="<?= !empty($_GET['idarticle']) ? $article['date_fabrication'] : ""?>" type="datetime-local" name="date_fabrication" id="date_fabrication" placeholder="veuillez saisir le nom">

                
                <label for="date_expiration">date d'expiration</label>
                <input  value="<?= !empty($_GET['idarticle']) ? $article['date_expiration'] : ""?>" type="datetime-local" name="date_expiration" id="date_expiration" placeholder="veuillez saisir le nom">

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
        <th>nom article</th>
        <th>categorie</th>
        <th>quantite</th>
        <th>prix unitaire</th>
        <th>date fabrication</th>
        <th>date expiration</th>
        <th>action</th>
        
    </tr>
    <?php
    $articles = getArticle();

    if(!empty($articles) && is_array($articles)){
            foreach($articles as $key => $value){

        ?>
        <tr>
           <td><?= $value['nomarticle'] ?></td>
           <td><?= $value['categorie'] ?></td>
           <td><?= $value['quantite'] ?></td>
           <td><?= $value['prix_unitaire'] ?></td>
           <td><?= date('d/m/Y H:i:s', strtotime($value['date_fabrication']))?></td>
           <td><?= date('d/m/Y H:i:s', strtotime($value['date_fabrication'])) ?></td>
         <td> <a href="?idarticle=<?=$value['idarticle'] ?> ?>"> <i class="bx bx-edit-alt"></i></a></td>
         
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