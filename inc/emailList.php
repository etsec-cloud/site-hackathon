<?php
require_once 'bdd.php';
$bdd = new Bdd;

$pdostatement = $bdd->bdd->prepare('SELECT * FROM email');
$execute = $pdostatement->execute();

$emails = $pdostatement->fetchAll();
?>

<div class="wrapper">
<h1>Listing des emails</h1>
    <div class="listing">
            <?php foreach ($emails as $email): ?>
                <span><?= $email['email'] ?></span>
            <?php endforeach; ?>
    </div>    
</div>   