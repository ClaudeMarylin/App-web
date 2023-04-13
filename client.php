<?php
include 'entete.php';

if(!empty($_GET['idclient'])){
    $client = getClient($_GET['idclient']);
  }

?>
<div class="home-content">
  
</div>
    <?php
include 'pied.php';
?>