

<?php
require_once ('client.php');
require_once ('Compts.php');



$t1 = new Titulaire("Rioux","Simon","16-03-1996","Labroque");// créer le client
$c11 = new Compte("compte courent", 100, "euros",$t1,1);//créer le 1er compte 
$c12 = new Compte("Livret A", 100, "euros",$t1,2);// créer le second compte
$t1->addCompte($c11); //attribut un comptes au client
$t1->addCompte($c12); //attribut les comptes au client

$t2 = new Titulaire("astier","aklexendre","16-06-1974 ","Lyon");
$c21 = new Compte("compte courent", 100, "euros",$t1,1);
$c22 = new Compte("Livret A", 100, "euros",$t1,2);
$t2->addCompte($c21);
$t2->addCompte($c22);



echo $c11->infoCompt();
$c11->créditer(100);
echo $c11->infoCompt();
echo $c12->infoCompt();
$c11->virement(100,$c12);
echo $c11->infoCompt();
echo $c12->infoCompt();

echo $t1->infoTitulaire();
?>