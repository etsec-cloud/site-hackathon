<?php 
class  Bdd{
          const host      ="localhost";
          const dbname    ="hackathon";
          const user      ="root";
          const pwd       ="root";
          public $bdd;

    public function __construct(){
         try{
               $this->bdd = new PDO("mysql:host=".self::host.";dbname=".self::dbname, self::user, self::pwd);
            }
            catch(Exception $e){
                echo "erreur de connexion :" . $e->getmessage();
            }
    }
}