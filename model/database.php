<?php
require "../config/database.php";

try
{
    class database
    {
 
        public static function readall(PDO $pdo,$table):array
        {   
            $tableStatement =$pdo->prepare("select * from $table");
            $tableStatement->execute();
            $tables= $tableStatement->fetchAll();
            return $tables;
    
        }
        public static function readwithid(PDO $pdo ,string $table, int $id_categorie,)
        {
            $tableStatement =$pdo->prepare("select * from $table where id_$table=$id_categorie");
            $tableStatement->execute();
            $tables = $tableStatement->fetchAll();
            return $tables;
        }

    
        public static function verify( $submit,  $email, $password)
        {
            $pdo=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
            if(isset($submit))
            {
                if ((!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))|| (!isset($password) || empty($password)))
                {
                    echo ("il faut um email et un mot de passe valide");
                }
                else
                {
                    $sqlQuery = 'SELECT * FROM user';
                    $user_login = $pdo->prepare($sqlQuery);
                    $user_login->execute();
                    $users_login = $user_login->fetchAll();
                    foreach ($users_login as $user) 
                    {
                        if($email==$user['user_login'] && $password== $user['password'] )
                        {
                            header('location: dashbord.php');
                            break;  
                        }
                        else{?>
                        <script>alert("il n'existe pas");</script> 
                        <?php }
                    }
                }
            }       
        }
    }
}
catch(Exception $ex)
{
    die('Erreur : ' . $e->getMessage());
}



 
  

  