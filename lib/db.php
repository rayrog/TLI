<?php 


class DB{
    

    private static $bdd = NULL;

        public static function getDB(){
        if(SELF::$bdd==null){
            try{
              SELF::$bdd = new PDO('mysql:host=127.0.0.1;dbname=FilRouge;charset=utf8','root', '');
            }
            catch (Exception $e)
            {
              die('Erreur : ' . $e->getMessage());
            }
        }
        return SELF::$bdd;
        }
    
     public function requete($sql){
         $resu = null;
         $db = $this->getDB();
         foreach ($db->query($sql) as $row) {
             $resu[] = $row;
         }
         return $resu;
    }    
    
    
    }

?>





    
    
    
    
    
    
    
    