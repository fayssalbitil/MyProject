<?php
class categorie
{
    private $id;
    public $label;
    private $description;
    private $date_pub;
    public function getlabel()
    {
        return $this->label;
    }
    public function getdescription()
    {
        return $this->description;
    }    public function getdate()
    {
        return $this->date_pub;
    }    
    public function setlabel(string $label)
    {
        $this->label=$label;
    }
    public function setdescription(string $description)
    {
        $this->description=$description;
    }
    public function setdate(DateTime $date_pub)
    {
        $this->date_pub=$date_pub;
    }
    public function __construct(string $label,string $description,datetime $date_pub)
    {
        $this->label=$label;
        $this->description=$description;
        $this->date_pub=$date_pub;
    }
}