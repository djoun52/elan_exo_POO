<?php
require_once ('realisateur.php');
require_once ('acteur.php');
require_once ('film.php');
require_once ('genre.php');
require_once ('role.php');

$r1= new Realisateur("Cameron","james","16-08-1954") ;
$a11= new Acteur("Worthington","sam","2-08-1976");
$r11= new Role("Jake Sully");
$a12= new Acteur("Saldana","Zoe","19-06-1978");
$r12= new Role("Neytiri");
$a13= new Acteur("Weaver","Sigourney","8-10-1949");
$r13= new Role("Grace Augustine");
$g11= new Genre("science-fiction");
$g12= new Genre("Action");
$syno1="L’action se déroule en 21543 sur Pandora, une des lunes de Polyphème, une planète géante gazeuse en orbite autour d'Alpha Centauri A, le système stellaire le plus proche de la Terre. L’exolune, recouverte d’une jungle luxuriante, est le théâtre du choc entre des humains, venus exploiter un minerai rare susceptible de résoudre la crise énergétique sur Terre, et la population autochtone, les Na’vis, qui vivent en parfaite symbiose avec leur environnement et tentent de se défendre face à l’invasion militarisée.";
$f1= new Film("Avatar",178,2009,$syno1,$r1);
$f1->addGenre($g11);
$f1->addGenre($g12);
$f1->addActeur($a11,$r11,$f1);
$f1->addActeur($a12,$r12,$f1);
$f1->addActeur($a13,$r13,$f1);
$r1->addFilm($f1);

echo $f1->infoFilm();
echo $r1->getInfoFilm();
echo $a11->getInfoFilm();
echo $a11->getInfoRole();
echo $a12->getInfoFilm();
echo $a13->getInfoFilm();
echo $g11->getInfoFilm();
echo $r11->getInfoActeur();


?>