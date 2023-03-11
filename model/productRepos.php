<?php 
class productrepos
{
    public static function readall()
    {   
        $pd=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        return database::readall($pd,"product");
    }
    public static function  readwithid($id_product)
    {
        $pd=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        return database::readwithid($pd,"product",$id_product);
    }
    public static function insert()
    {}
    public static function update()
    {}
    public static function delete()
    {}
}