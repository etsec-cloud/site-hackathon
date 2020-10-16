<?php
$error="";
$reussir="";
require_once 'email.php';
require_once 'bdd.php';

if(isset($_POST['email'])){  //si j'ai recu le formulaire

        if(empty($_POST['email'])){
            //le nom est vide
            $error ="veuillez renseigner un email";
        }
        else{

            $bdd = new Bdd();
            $emailModel = new Email();

            $emailModel -> setEmail($_POST['email']);

            $email = $emailModel->getEmail();

            $sql = "SELECT * FROM email where email = ?";

            $r = $bdd->bdd->prepare($sql);
            $r->bindParam(1, $email);
            $r->execute();

            // var_dunp($r->debugdumpParams());

            if($r->rowCount() >=1){
                $error ="Nous avons déjà votre email dans la base";
            }
            else{
                 $req = "INSERT INTO email(email) VALUES(:email)";
        
                    $insert = $bdd->bdd->prepare($req);
    
                    $insert ->execute(array(
                    'email'          => $email,
                ));
                $reussir = "<div class='reussir'>Votre article a été enovyé</div>";
  
            }
        
        }


}
?>