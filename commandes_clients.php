<?php
include 'entete.php';

if(!empty($_GET['id'])){
    $commande_client = getCommandeClient($_GET['id']);
  }

?>
<div class="home-content">
      <div class="overview-boxes">
        
<div class="box">

<table class="mtable">
    <tr>
        
        <th>Nom du client</th>
        <th>Nom de l'article</th>
        <th>Caracteristiques</th>
        <th>Quantité</th>
    </tr>
     <?php
    $commande_clients = getCommandeClient();

    if(!empty($commande_clients) && is_array($commande_clients)){
           foreach($commande_clients as $key => $value){

        ?> 
      
        <tr>
           
           <td><?= $value['nom_clt'] ?></td>
           <td><?= $value['nom_article'] ?></td>
           <td><?= $value['caracteristiques'] ?></td>
           <td><?= $value['qte_voulue'] ?></td>

         
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

<style>
    /* Googlefont Poppins CDN Link */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.sidebar {
  position: fixed;
  height: 100%;
  width: 240px;
  background:  #0d3072;
  transition :all 0.5s ease;
}
.sidebar.active {
  width: 60px;
}
.sidebar .logo-details {
  height: 80px;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i {
  font-size: 28px;
  font-weight: 500;
  color: #fff;
  min-width: 60px;
  text-align: center;
}
.sidebar .logo-details .logo_name {
  color: #fff;
  font-size: 24px;
  font-weight: 500;
}
.sidebar .nav-links {
  margin-top: 10px;
}
.sidebar .nav-links li {
  position: relative;
  list-style: none;
  height: 50px;
}
.sidebar .nav-links li a {
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li a.active {
  background: #081d45;
}
.sidebar .nav-links li a:hover {
  background: #081d45;
}
.sidebar .nav-links li i {
  min-width: 60px;
  text-align: center;
  font-size: 18px;
  color: #fff;
}
.sidebar .nav-links li a .links_name {
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
}
.sidebar .nav-links .log_out {
  position: absolute;
  bottom: 0;
  width: 100%;
}
.home-section {
  position: relative;
  background: #f5f5f5;
  min-height: 100vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section {
  width: calc(100% - 60px);
  left: 60px;
}
.home-section nav {
  display: flex;
  justify-content: space-between;
  height: 80px;
  background: #fff;
  display: flex;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px greenyellow;
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section nav {
  left: 60px;
  width: calc(100% - 60px);
}
.home-section nav .sidebar-button {
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
}
nav .sidebar-button i {
  font-size: 35px;
  margin-right: 10px;
}
.home-section nav .search-box {
  position: relative;
  height: 50px;
  max-width: 550px;
  width: 100%;
  margin: 0 20px;
}
nav .search-box input {
  height: 100%;
  width: 100%;
  outline: none;
  background: #f5f6fa;
  border: 2px solid #efeef1;
  border-radius: 6px;
  font-size: 18px;
  padding: 0 15px;
}
nav .search-box .bx-search {
  position: absolute;
  height: 40px;
  width: 40px;
  background:  #333;
  right: 5px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 4px;
  line-height: 40px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  transition: all 0.4 ease;
}
.home-section nav .profile-details {
  display: flex;
  align-items: center;
  background: #f5f6fa;
  border: 2px solid #efeef1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
nav .profile-details img {
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
nav .profile-details .admin_name {
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
nav .profile-details i {
  font-size: 25px;
  color: #333;
}
.home-section .home-content {
  position: relative;
  padding-top: 104px;
}
.home-content .overview-boxes {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  flex-wrap: nowrap;
  padding: 0 20px;
  margin-bottom: 26px;
}
.overview-boxes .box {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: calc(100% / 4 - 15px);
  background: #fff;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  margin: 5px;
}
.overview-boxes .box-topic {
  font-size: 20px;
  font-weight: 500;
}
.home-content .box .number {
  display: inline-block;
  font-size: 35px;
  margin-top: -6px;
  font-weight: 500;
}
.home-content .box .indicator {
  display: flex;
  align-items: center;
}
.home-content .box .indicator i {
  height: 20px;
  width: 20px;
  background: #8fdacb;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  font-size: 20px;
  margin-right: 5px;
}
.box .indicator i.down {
  background: #e87d88;
}
.home-content .box .indicator .text {
  font-size: 12px;
}
.home-content .box .cart {
  display: inline-block;
  font-size: 32px;
  height: 50px;
  width: 50px;
  background: #cce5ff;
  line-height: 50px;
  text-align: center;
  border-radius: 12px;
  margin: -15px 0 0 6px;
}
.home-content .box .cart.two {
  background: #c0f2d8;
}
.home-content .box .cart.three {
  color: #ffc233;
  background: #ffe8b3;
}
.home-content .box .cart.four {
  color: #e05260;
  background: #f7d4d7;
}
.home-content .total-order {
  font-size: 20px;
  font-weight: 500;
}
.home-content .sales-boxes {
  display: flex;
  justify-content: space-between;
  /* padding: 0 20px; */
}

/* left box */
.home-content .sales-boxes .recent-sales {
  width: 65%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.home-content .sales-boxes .sales-details {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sales-boxes .box .title {
  font-size: 24px;
  font-weight: 500;
  /* margin-bottom: 10px; */
}
.sales-boxes .sales-details li.topic {
  font-size: 20px;
  font-weight: 500;
}
.sales-boxes .sales-details li {
  list-style: none;
  margin: 8px 0;
}
.sales-boxes .sales-details li a {
  font-size: 18px;
  color: #333;
  font-size: 400;
  text-decoration: none;
}
.sales-boxes .box .button {
  width: 100%;
  display: flex;
  justify-content: flex-end;
}
.sales-boxes .box .button a {
  color: #fff;
  background: #0a2558;
  padding: 4px 12px;
  font-size: 15px;
  font-weight: 400;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.sales-boxes .box .button a:hover {
  background: #0d3073;
}

/* Right box */
.home-content .sales-boxes .top-sales {
  width: 35%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px 0 0;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.sales-boxes .top-sales li {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 10px 0;
}
.sales-boxes .top-sales li a img {
  height: 40px;
  width: 40px;
  object-fit: cover;
  border-radius: 12px;
  margin-right: 10px;
  background: #333;
}
.sales-boxes .top-sales li a {
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sales-boxes .top-sales li .product,
.price {
  font-size: 17px;
  font-weight: 400;
  color: #333;
}
/* Responsive Media Query */
@media (max-width: 1240px) {
  .sidebar {
    width: 60px;
  }
  .sidebar.active {
    width: 220px;
  }
  .home-section {
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section {
    /* width: calc(100% - 220px); */
    overflow: hidden;
    left: 220px;
  }
  .home-section nav {
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section nav {
    width: calc(100% - 220px);
    left: 220px;
  }
}
@media (max-width: 1150px) {
  .home-content .sales-boxes {
    flex-direction: column;
  }
  .home-content .sales-boxes .box {
    width: 100%;
    overflow-x: scroll;
    margin-bottom: 30px;
  }
  .home-content .sales-boxes .top-sales {
    margin: 0;
  }
}
@media (max-width: 1000px) {
  .overview-boxes .box {
    width: calc(100% / 2 - 15px);
    margin-bottom: 15px;
  }
}
@media (max-width: 700px) {
  nav .sidebar-button .dashboard,
  nav .profile-details .admin_name,
  nav .profile-details i {
    display: none;
  }
  .home-section nav .profile-details {
    height: 50px;
    min-width: 40px;
  }
  .home-content .sales-boxes .sales-details {
    width: 560px;
  }
}
@media (max-width: 550px) {
  .overview-boxes .box {
    width: 100%;
    margin-bottom: 15px;
  }
  .sidebar.active ~ .home-section nav .profile-details {
    display: none;
  }
}
@media (max-width: 400px) {
  .sidebar {
    width: 0;
  }
  .sidebar.active {
    width: 60px;
  }
  .home-section {
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section {
    left: 60px;
    width: calc(100% - 60px);
  }
  .home-section nav {
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section nav {
    left: 60px;
    width: calc(100% - 60px);
  }
}


/*input*/
input,
textarea,
select{
  margin-bottom: 10px;
  box-sizing: border-box;
  width: 100%;
  margin: 8px 0;
  padding: 8px 5px;
  border-radius: 5px;
  display: block;
}

.radio{
  margin-bottom: 10px;
  width: 20px;
}

button{
  background-color: rgb(6, 183, 233);
  color: white;
  width: 150px;
  height: 30px;
  font-size: 15px;
  border-radius: 5px;
}

label{
  display: block;
}


form{
  width: 100%;
}

/*Alert*/


.alert{
  margin: 10px;
  padding: 15px;
  color: #ffffff;
  border-radius: 10px;
  background-color: #346eff;
}


/* style table */

/*table*/

table.mtable {
  width: 100%;
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  
}

th,
td{
  text-align: left;
  padding: 16px;
}

table.mtable tr:nth-child(even){
  background: #f2f2f2;
}
table.mtable td{
  padding: 10px;
}

/*list*/

ul.mtable,
ol.mtable {
padding: 0;
margin: 0;
list-style: none;
}

ul.mtable li,
ol.mtable li{
  padding: 10px;
}

ul.mtable li:nth-child(even),
ol.mtable li:nth-child(even)
{
  background: #f2f2f2;
}

/* recu&*/
.cote-a-cote {
  display: flex;
  justify-content: space-between;
}

.page {
  width: 210mm;
  min-height: 297mm;
  padding: 20mm;
  margin: 10mm auto;
  border: 1px #D3D3D3 solid;
  border-radius: 5px;
  background: white;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
  padding: 1cm;
  border: 5px red solid;
  height: 257mm;
  outline: 2cm #FFEAEA solid;
}

@media print {
  .hidden-print,
  .hidden-print * {
    display: none !important;
  }
}

@page {
  size: A4;
  margin: 0;
}
@media print {
  html, body {
      width: 210mm;
      height: 297mm;        
  }
  .hidden-print,
  .hidden-print * {
    display: none !important;
  }

  .page {
    margin: 0;
    border: initial;
    border-radius: initial;
    width: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
}
}

.search-box{
  background-color: #2bd47d;
  size: 10px;
  color: #333;
}

/* css login*/

body{
  background-size: cover;
  height: 100vh;
  border-radius: 0px 0px 20px 20px;
  margin-bottom: 40px;
}

h1{
   backface-visibility: var(--gray-dark);
  width: fit-content;
  margin: 50px;
  padding: 50px 0 0 20%;
  text-shadow: -3px 3px 2px #BCF5A3;
  animation: titre ease 5s;
 

}
h2{
  backface-visibility: var(--gray-dark);
 width: fit-content;
 margin: 50px;
 padding: 50px 0 0 20%;
  height: 10vh;
  border-radius:  100px;
  margin-bottom: 40px;

}
@keyframes titre{
  0% {
      opacity:0;
      transform : translateY(350px);

  }
  100%{
      opacity: 1;
      transform: translateX(0px);
  }
  
}
.rito h1{
  margin-top: 15px;
  padding: 100px 0 20px 0;
  font-size: 2em;
  text-shadow: 1px 1px 0 #BCF5A9,1px 1px 0 #BCF5A9,1px 1px 0 #BCF5A9,1px 1px 0 #BCF5A9,1px -1px 0 #BCF5A9,1px -1px 0 #BCF5A9;
   
}
.aldo{
  width: 40%;
  min-width: 350px ;
  margin: 0 auto;
  
}
.rita{
  right: 100px;
  border: 50px;
}
#unique{
  text-align: center;
  text-decoration: aliceblue;
}




</style>