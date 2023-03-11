<?php
class product
{
    private  int $id;
    private string $nom;
    private string $description;
    private int $sku;
    private string $visibilite;
    private DateTime $date_pub;
    private int $id_categorie;
    private float $prixorg;
    private float $prixpromo;
    private string $image;
    public function getid()
    {
        return $this->id;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function getdescription()
    {
        return $this->description;
    }   
    public function getsku()
    {
        return $this->sku;
    }   
    public function getvisibilite()
    {
        return $this->visibilite;
    }  
    public function getdate()
    {
        return $this->date_pub;
    }    
    public function getidcategorie()
    {
        return $this->id_categorie;
    }  
    public function getprixorg()
    {
        return $this->prixorg;
    }    public function getprixpromo()
    {
        return $this->prixpromo;
    }    public function getimage()
    {
        return $this->image;
    }  
    public function setnom(string $nom)
    {
        $this->nom=$nom;
    }
    public function setdescription(string $description)
    {
        $this->description=$description;
    }
    public function setsku(int $sku)
    {
        $this->sku=$sku;
    }
    public function setvisibilite(string $visibilite)
    {
        $this->visibilite=$visibilite;
    }   

    public function setdate(DateTime $date_pub)
    {
        $this->date_pub=$date_pub;
    }
    public function setidcategorie(int $id_categorie)
    {
        $this->id_categorie=$id_categorie;
    }
    public function setprixorg(float $prixorg)
    {
        $this->prixorg=$prixorg;
    }
    public function setprixpromo(float $prixpromo)
    {
        $this->prixpromo=$prixpromo;
    }
    public function setimage(string $image)
    {
        $this->image=$image;
    }
    public function __construct(string $nom,string $description,float $sku,string $visibilite,datetime $date_pub,int $id_categorie,float $prixorg,float $prixpromo,string $image)
    {
        $this->nom=$nom;
        $this->description=$description;
        $this->sku=$sku;
        $this->visibilite=$visibilite;
        $this->date_pub=$date_pub;
        $this->id_categorie=$id_categorie;
        $this->prixorg=$prixorg;
        $this->prixpromo=$prixpromo;
        $this->image=$image;
    }
}