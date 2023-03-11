<?php 
     $pdo =new pdo('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
     $productStatement =$pdo->prepare("select p.* from product p join  categorie c on p.id_categorie=c.id_categorie where c.label='".$_GET['label']."'");
     $productStatement->execute();
     $products = $productStatement->fetchAll();
    
?>


<style>

<?php
       include("../public/styles/products.css");?>
</style>
<h1 class="ourproduct">our product</h1>
<div id="ourproducts" class=" row " >
      
         <?php foreach($products as $product) { ?>
                  <div class="col" id="product" style=" ">
                     <div class="col-lg-12 col-sm-6">
                        <div class="product_box">
                           <h4 class="bursh_text"><?php echo $product['nom']?></h4>
                           <p class="lorem_text"><?php echo $product['description']?> </p>
                           <img src="assets/logo.jfif" class="image_1">
                           <br>
                           <div class="btn_main">
                              <div class="buy_bt">
                                    <?php echo $product['prixorg']."$"?>
                                    <?php echo '/'.$product['prixpromo']?>
                                    <a class="buy" href="#">Buy</a>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>
</div>
</body>
