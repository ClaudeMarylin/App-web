<?php
include 'entete.php';

if(!empty($_GET['idclient'])){
    $client = getClient($_GET['idclient']);
  }

?>
<div class="home-content">
      <section class="menu" id="menu">
            <div class="content">
                <div class="box">
                    <div class="image">
                        <img src="1.jpg">   
                    </div>
                    
                </div>

                <div class="box">
                    <div class="image">
                        <img src="2.jpg">   
                    </div>
                    
                </div>

                <div class="box">
                    <div class="image">
                        <img src="3.jpg">   
                    </div>
                    
                </div>

                <div class="box">
                    <div class="image">
                        <img src="4.jpg">   
                    </div>
                   
                </div>

                <div class="box">
                    <div class="image">
                        <img src="5.jpg">   
                    </div>
                    
                </div>

                <div class="box">
                    <div class="image">
                        <img src="6.jpg">   
                    </div>

                </div>
                <div class="box">
                    <div class="image">
                        <img src="7.jpg">   
                    </div>

                </div>

                <div class="box">
                    <div class="image">
                        <img src="8.jpg">   
                    </div>

                </div>

                <div class="box">
                    <div class="image">
                        <img src="9.jpg">   
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="10.jpg">   
                    </div>

                </div>

                <div class="box">
                    <div class="image">
                        <img src="11.jpg">   
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="12.jpg">   
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="13.jpg">   
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="14.jpg">   
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="15.jpg">   
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="16.jpg">   
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="17.jpg">   
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="18.jpg">   
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="19.jpg">   
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="20.jpg">   
                    </div>

                </div>

                
            </div>
            

            
        </section>

</div>

<style>

.titre_menu{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.menu .content{
    display: flex;
    justify-content: center;
    flex-direction: row-reverse;
    flex-wrap: wrap;
    margin-top: 40px;
}

.menu .content p{
    font-size: 1em;
    font-weight: 300;
    color: rgb(1, 69, 255);
}

.menu .content .box{
    width: 300px;
    margin: 20px;
    border: 15px solid white;
    box-shadow: 0 5px 35px rgb(1, 69, 255);
    border-radius: 5px;

}

.menu .content .box .image{
    position: relative;
    width: 100%;
    height: 250px;
}

.menu .content .box .image img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
}

.menu .content .box .image .text p{
    font-weight: 100;
    color: black;
}
</style>
    <?php
include 'pied.php';
?>