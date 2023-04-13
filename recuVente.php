<?php
include 'entete.php';

if(!empty($_GET['idvente'])){
  $vente = getVente($_GET['idvente']);
}

?>
<div class="home-content">


    <button class="hidden-print" id="btnPrint" style ="position:relative; left:45%;"> <i class='bx bx-printer' ></i> imprimer</button>


<div class="page">
        <div class="cote-a-cote">
            <img src="image/dc.jpg" alt="">
            <div>
                <br><br><p><span style="font-weight: bold;">Facture  N° </span> <?= $vente['idvente']?> </p>
                <p><span style="font-weight: bold;">Date : </span><?= date('d/m/Y H:i:s', strtotime($vente['date_vente']))?> </p>
            </div>
        </div>
        <p><span style="font-weight: bold; tex-decoration: underline; font-size:20px; padding-left:50px;"><U>Client : </U></p>
        <div class="cote-a-cote" style="width:50%;">
            <p style="padding-left:20px; font-weight: bold;">Nom :</p>
            <p><?= $vente['nomclient']." ".$vente['prenomclient'] ?> </p>

        </div>

        <div class="cote-a-cote" style="width:50%;">
            <p style="padding-left:20px;font-weight: bold;">Téléphone:</p>
            <p><?= $vente['telephoneclient'] ?> </p>

        </div>

        <div class="cote-a-cote" style="width:50%;">
            <p style="font-weight: bold; padding-left:20px;">Adresse:</p>
            <p><?= $vente['adresseclient']?> </p>

        </div>

        <br>
        <br>
        <br>
        
        <p><span style="font-weight: bold; tex-decoration: underline;font-size:35px; padding-left:220px;"><U>Facture</U></p><br>
        <table class="mtable"  border-color="black" border=2>
    <tr>
        <th>Designation</th>
        <th>quantite</th>
        <th>prix unitaire </th>
        <th>prix total</th>
        
        
        
    </tr>
    <?php
    
  
    
        ?>
        <tr>
            
           <td><?= $vente['nomarticle'] ?></td>
           <td><?= $vente['quantite'] ?></td>
           <td><?= $vente['prix_unitaire'] ?></td>
           <td><?= $vente['prix'] ?></td>
          
        </tr> 
         
</table>
<br><br><br><br><br><br><br><br><br><br><br>
    <p style="padding-left:20px;font-weight: bold;"><U>Visa du client</U></p>
    <p style="padding-left:450px;font-weight: bold;"><U>Visa de la secretaire</U></p>
        </div>
      
      </div>
    </section>
    <?php
include 'pied.php';

?>
<script>

var btnPrint = document.querySelector('#btnPrint');

btnPrint.addEventListener("click",()=> {
    window.print();
});
    function setprix(){
       var article = document.querySelector('#idarticle');
       var quantite = document.querySelector('#quantite');
       var prix = document.querySelector('#prix');

        var prixunitaire = article.options[article.selectedIndex].getAttribute('data-prix');

        prix.vente = Number(quantite.vente) * Number(prixunitaire);
    }

    </script>
    
    