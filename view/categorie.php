<style>
   <?php
       include("../public/styles/categorie.css");?>
</style>
<?php

       require_once("../model/categorieRepos.php");
       $categories=categorierepos::readall();
?>
<h1 class="product_taital">categorie</h1>
 
      <?php foreach($categories as $categorie) { ?>
         <div  class="categorie">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item active">
                  <form action="" method="GET">
                     <a class="nav-link" href="productsfiltre.php?label=<?php echo $categorie["label"]?>"><?php echo $categorie["label"]?></a>
                  </form>
               </li>
            </ul> 
         </div>
 
<?php } ?>
