<?php
include 'entete.php';

if(!empty($_GET['idarticle'])){
  $article = getVente($_GET['idarticle']);
}

?>
<div class="home-content">
      <div class="overview-boxes">
        <div class="box">
            <form   class="rito" action="<?= !empty($_GET['idarticle']) ? "./modifVente.php" : "./ajoutVente.php"?>" method="post">

                <input   value="<?= !empty($_GET['idarticle']) ? $article['idarticle'] : ""?>" type="hidden" name="idarticle" id="idarticle" >

                <label for="idarticle">article</label>
                <select name="idarticle" id="idarticle">
               <?php 

                 $articles = getArticle();
                 if(!empty($articles) && is_array($articles)){
                    foreach($articles as $key => $value){
                        ?>
                        <option data-prix="<?= $value['prix_unitaire'] ?>"   value="<?= $value['idarticle'] ?>"><?= $value['nomarticle']." - ".$value['quantite'] ?></option>
                        <?php
                    }
                 }
               ?>
                </select>

                <label for="idclient">client</label>
                <select name="idclient" id="idclient">
               <?php 

                 $clients = getClient();
                 if(!empty($clients) && is_array($clients)){
                    foreach($clients as $key => $value){
                        ?>
                        <option value="<?= $value['idclient'] ?>"><?= $value['nomclient']."- ".$value['prenomclient'] ?></option>
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
        <th>client</th>
        <th>quantite</th>
        <th>prix </th>
        <th>date </th>
        <th>action </th>
        
        
        
    </tr>
    <?php
    $vente= getVente();
  
    if(!empty($vente) && is_array($vente)){
            foreach($vente as $key => $value){

        ?>
        <tr>
           <td><?= $value['nomarticle'] ?></td>
           <td><?= $value['nomclient']." ".$value['prenomclient'] ?></td>
           <td><?= $value['quantite'] ?></td>
           <td><?= $value['prix'] ?></td>
           <td><?= date('d/m/Y H:i:s', strtotime($value['date_vente']))?></td>
           
         <td> <a href="recuVente.php?idvente=<?=$value['idvente'] ?>"> <i class="bx bx-receipt"></i></a>
         
         <a onclick="annuleVente(<?=$value['idvente'] ?>,<?=$value['idarticle'] ?>,<?=$value['quantite'] ?>)" style="color:red;">  <i class='bx bx-stop-circle'></i></a>
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
        if(confirm("voulez vous vraiment annuler cette vente?")){
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
    
    