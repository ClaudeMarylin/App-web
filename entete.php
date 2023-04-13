
<?php 

include_once './function.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>
      <?php
 echo ucfirst(str_replace(".php","",basename($_SERVER['PHP_SELF']))); 

      ?>
</title>
    <link rel="stylesheet" href="./style.css">
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="boxicons-master/css/boxicons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>

  

    <div class="sidebar hidden-print">
      <div class="logo-details">
        <i class="bx bxl-c-plus-plus"></i>
        <span class="logo_name" style="font-size: 18px">Donald Computers SARL</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="dashboard.php" ? "active" : "" ?>">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="vente.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="vente.php" ? "active" : "" ?>">
            <i class="bx bx-shopping-bag"></i>
            <span class="links_name">Ventes</span>
          </a>
        </li>
        <li>
          <a href="client.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="client.php" ? "active" : "" ?>">
            <i class="bx bx-user"></i>
            <span class="links_name">Clients</span>
          </a>
        </li>
        <li>
          <a href="fournisseur.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="fournisseur.php" ? "active" : "" ?>">
            <i class="bx bx-user"></i>
            <span class="links_name">Fournisseur</span>
          </a>
        </li>
        <li>
          <a href="article.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="article.php" ? "active" : "" ?>">
            <i class="bx bx-box"></i>
            <span class="links_name">Article</span>
          </a>
        </li>
        <li>
          <a href="commande.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="commande.php" ? "active" : "" ?>">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Commande</span>
          </a>
        </li>
        <li>
          <a href="commandes_clients.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="commandes_clients.php" ? "active" : "" ?>">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Commandes Clients</span>
          </a>
        </li>
        <li>
          <a href="stock.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="stock.php" ? "active" : "" ?>">
            <i class="bx bx-shopping-bag"></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          
        </li>
        <li>
          
        </li>
        <li>
          
        </li>
        <li>
          
        </li>
        <li>
          
        </li>
        <li>
          
        </li>
        <li>
          
        </li><li>
          
          </li>
        <li>
          <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="deconnexion.php" ? "active" : "" ?>">
          <i class='bx bxs-log-out'></i>
            <span class="links_name">Déconnexion</span>
          </a>
        </li>
        
        <!-- <li>
          <a href="#">
            <i class="bx bx-message" ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-heart" ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li> -->
       
      </ul>
    </div>
    <section class="home-section">
      <nav class="hidden-print" >
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">
            <?php
 echo ucfirst(str_replace(".php","",basename($_SERVER['PHP_SELF']))); 

?>
</span>
        </div>
        
        <div class="profile-details">
          <!--<img src="images/profile.jpg" alt="">-->
          <span class="admin_name">Utilisateur</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

