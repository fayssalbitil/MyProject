<?php 
         $pdo =new pdo('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
         $productStatement =$pdo->prepare("select p.*,c.* from product p join  categorie c on p.id_categorie=c.id_categorie");
         $productStatement->execute();
         $products = $productStatement->fetchAll();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dashbord</title>
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<style>
   <?php
       include("../public/styles/bootstrap.css");
       include("../public/styles/font-awesome.css");
       include("../public/styles/custom.css");?>
</style>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <img src="assets/find_user.png" class="user-image img-responsive"/>
					</li>                           
                    <li>
                        <input type="button" onclick="showproducts()" id="proudcts" class="active-menu" value="PRODUCTS" >
                    </li>
                     <li>
                        <input type="button" onclick="showcategories()" class="active-menu"  value="CATEGORIES" >
                    </li>
                </ul>
            </div>
<div  style="padding-left: 300px;" class="container-lg">
    <div id="productstable">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>product <b>Details</b></h2></div>
                 
                </div>
            </div>
            <table  style="width:2000px;" class="table table-bordered">
                <thead>
                <div class="col-sm-4">
                            <button type="submit" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>  
                    <tr>
                        <th>Nom</th>
                        <th >Description</th>
                        <th>Sku</th>
                        <th>visibilite</th>
                        <th>Date_pub</th>
                        <th>Categorie</th>
                        <th>prix original</th>
                        <th>prix avec promotion</th>
                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
    
                <tbody>
                <?php foreach($products as $product)  { ?>
                    <form action="" method="GET">
                    <tr>
                    <td><?php echo $product['nom']?></td>
                        <td ><?php echo $product['description']?></td>
                        <td><?php echo $product['sku']?></td>
                        <td><?php echo $product['visibilite']?></td>
                        <td><?php echo $product['date_pub']?></td>
                        <td><?php echo $product['label']?></td>
                        <td><?php echo $product['prixorg']?></td>
                        <td><?php echo $product['prixpromo']?></td>
                        <td><?php echo $product['image']?></td>
 
                        <td>
                            <input type="button" id="ud_button" class="material-icons" value="&#xE254;"> 
                            <input type="button" id="ud_button" class="material-icons" value="&#xE872;">
                         </td> 
                    </tr>
                    </form>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div  style="padding-left: 300px;" class="container-lg">
    <div  id="categoriestable" class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>categories <b>Details</b></h2></div>
                    <div class="col-sm-4">
                            <button type="submit" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table style="width:2000px;" class="table table-bordered">
                <thead>
                    <tr>
                        <th>label</th>
                        <th >Description</th>
                        <th>Date_pub</th>
                        <th>Actions</th>
                    </tr>
                </thead>
    
                <tbody>
                <?php foreach($products as $product)  { ?>
                    <form action="" method="GET">
                    <tr>
                    <td><?php echo $product['label']?></td>
                        <td ><?php echo $product['description']?></td>
                        <td><?php echo $product['date_pub']?></td> 
                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" href="../categorie/edit.php?id=<?php echo $categorie['id_categorie']?>&label=<?php echo $categorie['label']?>&description=<?php echo $categorie['description']?>&date_pub=<?php echo $categorie['date_pub']?>"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip" href="../categorie/delete.php?id=<?php echo $categorie['id_categorie']?>"><i class="material-icons">&#xE872;</i></a>   
                         </td> 
                    </tr>
                    </form>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>      
</body>
<script>
    var buttons=document.getElementById("proudcts");
    var tableproduct=document.getElementById("productstable");
    var tablecategories=document.getElementById("categoriestable");
    function showproducts()
    {
        tablecategories.style.display='none';
        tableproduct.style.display='inline';
    }
    function showcategories()
    {
        tableproduct.style.display='none'
        tablecategories.style.display='inline';

        
    }
</script>
</html>
