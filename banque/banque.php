

<?php
require_once ('client.php');
require_once ('Compts.php');



$t1 = new Titulaire("Rioux","Simon","16-03-1996","Labroque");// créer le client
$c11 = new Compte("compte courent", 100, "euros",$t1,1);//créer le 1er compte
$c12 = new Compte("Livret A", 100, "euros",$t1,2);// créer le second compte
$ct1 = [$c11, $c12 ];// liste des comptes du clients
$t1->addCompts($ct1); //attribut les comptes au client

$t2 = new Titulaire("astier","aklexendre","16-06-1974 ","Lyon");
$c21 = new Compte("compte courent", 100, "euros",$t1,1);
$c22 = new Compte("Livret A", 100, "euros",$t1,2);
$ct2 = [$c21, $c22 ];
$t2->addCompts($ct2);



// echo $c1->infoCompt();
// $c1->créditer(100);
// echo $c1->infoCompt();
// echo $c2->infoCompt();
// $c11->virement(100,$c12);
// echo $c1->infoCompt();
// echo $c2->infoCompt();

echo $t1->infoTitulaire();
?>