<?php 
require("../libs/paths.php");

require ("../model/database.php");
    paths::requirelvl2model("layout","header");
    paths::requirelvl1model("categorie");
    paths::requirelvl2model("product","products");
    paths::requirelvl1model("aboutUS");
    paths::requirelvl2model("layout","footer");

      
