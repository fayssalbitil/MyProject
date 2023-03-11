<?php



class categorierepos 
{ 
    private $Db_host=DB_HOST;
    private $Db_database=DB_NAME;
    private $Db_root=DB_USER;
    public static function readall()
    {   
        $pd=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        return database::readall($pd,"categorie");
    }
    public static function readwithid($id_categorie)
    {
        $pd=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        return database::readwithid($pd,"categorie",$id_categorie);
    }
    public static function insert()
    {}
    public static function update()
    {}
    public static function delete()
    {}
}