<?php
class paths{

    public static function requirelvl2model(string $folder,string $model)
    {
        require "../view/$folder/$model.php";
    }
    public static function requirelvl1model($model)
    {
        require "../view/$model.php";
    }
}