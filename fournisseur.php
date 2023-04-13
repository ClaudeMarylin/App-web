<?php
include 'entete.php';

if(!empty($_GET['idfournisseur'])){
    $fournisseur = getFournisseur($_GET['idfournisseur']);
  }

?>
<div class="home-content">
      <div class="overview-boxes">
        <div class="box">
            <form  class="rito" action="<?= !empty($_GET['idfournisseur']) ? "./modifFournisseur.php" : "./ajoutFournisseur.php"?>" method="post">

        
                <input  value="<?= !empty($_GET['idfournisseur']) ? $fournisseur['idfournisseur'] : ""?>"  type="hidden" name="idfournisseur" id="idfournisseur" >

                <label for="nomfournisseur">nom du fournisseur</label>
                <input  value="<?= !empty($_GET['idfournisseur']) ? $fournisseur['nomfournisseur'] : ""?>" type="text" name="nomfournisseur" id="nomfournisseur" placeholder="veuillez saisir le nom">

                <label for="prenomfournisseur">prenom du fournisseur</label>
                <input   value="<?= !empty($_GET['idfournisseur']) ? $fournisseur['prenomfournisseur'] : ""?>" type="text" name="prenomfournisseur" id="prenomfournisseur" placeholder="veuillez saisir le prenom">

                


                <label for="telephonefournisseur">N^ telephone</label>
                <input  value="<?= !empty($_GET['idfournisseur']) ? $fournisseur['telephonefournisseur'] : ""?>" type="text" name="telephonefournisseur" id="telephonefournisseur" placeholder="veuillez saisir le numero telephone ">
                
                
                <label for="adressefournisseur">adresse</label>
                <input  value="<?= !empty($_GET['idfournisseur']) ? $fournisseur['adressefournisseur'] : ""?>" type="text" name="adressefournisseur" id="adressefournisseur" placeholder="veuillez saisir l'adresse ">
                

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
        
        <th>nom</th>
        <th>prenom</th>
        <th>telephone</th>
        <th>adresse</th>
        <th>action</th>
        
    </tr>
    <?php
    $fournisseurs = getFournisseur();

    if(!empty($fournisseurs) && is_array($fournisseurs)){
            foreach($fournisseurs as $key => $value){

        ?>
        <tr>
           
           <td><?= $value['nomfournisseur'] ?></td>
           <td><?= $value['prenomfournisseur'] ?></td>
           <td><?= $value['telephonefournisseur'] ?></td>
           <td><?= $value['adressefournisseur'] ?></td>
           <td> <a href="?idfournisseur= <?=$value['idfournisseur'] ?> ?>"> <i class="bx bx-edit-alt"></i></a></td>
         
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