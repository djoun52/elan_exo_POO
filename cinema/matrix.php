<?php
require_once ('realisateur.php');
require_once ('acteur.php');
require_once ('film.php');
require_once ('genre.php');
require_once ('role.php');

$r1= new Realisateur("Wachowski","Les"," 21-06-1965") ;
$a11= new Acteur("Reeves","Keanu","2-0-1964 ");
$r11= new Role("Néo");

$g1= new Genre("science-fiction");

$syno1="Il dépeint un futur dystopique dans lequel la réalité perçue par la plupart des humains est en fait une simulation virtuelle appelée « Matrice », laquelle est créée par des machines douées d'intelligence afin d'asservir les être humains, à leur insu, et de se servir de la chaleur et de l'activité électrique de leur corps comme source d'énergie. Le programmeur informatique Neo apprend cette vérité, c'est le début d'une rebellion.";
$syno2="suite de matrix";
$syno3="fin de la trilogie matrix";
$f1= new Film("matrix",136,1999 ,$syno1,$r1);
$f2= new Film("Matrix Reloaded ",138 ,2003 ,$syno1,$r1);
$f3= new Film("Matrix Revolutions",129,2003 ,$syno1,$r1);

$f1->addGenre($g1);
$f2->addGenre($g1);
$f3->addGenre($g1);

$f1->addActeur($a11,$r11,$f1);
$f2->addActeur($a11,$r11,$f2);
$f3->addActeur($a11,$r11,$f3);
$r1->addFilm($f1);

echo $f1->infoFilm();
echo $f2->infoFilm();
echo $f2->infoFilm();
echo $r1->getInfoFilm();
echo $a11->getInfoFilm();
echo $a11->getInfoRole();
echo $g1->getInfoFilm();
echo $r11->getInfoActeur();


?>