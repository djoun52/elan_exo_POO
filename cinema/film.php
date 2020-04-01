<?php
class Film
{
    // Properties
    
    protected  $titre;
    protected  $dateDeSortie;
    protected  $durée;
    protected  $synopsis ;
    protected  $realisateur;
    public     $acteur = [];
    public     $genre = [];

  

    public function __construct(string $c_titre,int $c_durée , $c_dateDeSortie,string $c_synopsis,$c_realisateur)
    {
        is_string($c_titre) ? $this->titre = $c_titre : NULL;
        $this->dateDeSortie = $c_dateDeSortie;
        is_int($c_durée) ? $this->durée = $c_durée : NULL;
        is_string($c_synopsis) ?$this->synopsis = $c_synopsis : NULL ;
        $this->realisateur = $c_realisateur;
    }


    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($p_titre)
    {
        $this->titre = $p_titre;
    }
    
    public function getDateDeSortie()
    {
        return $this->dateDeSortie;
    }
    public function getDuree()
    {
        return $this->durée;
    }
    public function convertDuree()
    {
        $s="";
        $c=$this->getDuree();
        $h=intdiv($c,60);
        $m=$c%60;
        $s.=$h ."HH". $m;
        return $s;
    }
    public function getSynopsis()
    {
        return $this->synopsis;
    }
    public function getRealisateur()
    {
        return $this->realisateur;
    }
    public function getRealisateurNomPrenom()
    {
        $r= $this->getRealisateur();
        $s=$r->getNomPrenom();
        return $s;
    }


    public function addGenre($param)
    {
        $param->addFilm($this);
        return array_push($this->genre,$param);
    } 
    public function getGenre()
    {
        return $this->genre;
    }
    public function printGenre()
    {
        $s="";
        foreach ($this->getGenre() as  $value) {
            $s.= $value->getNom() . "/";
        }
        return $s;
    }

    public function addActeur($acteur,$role,$film)
    {
        $acteur->addRole($role,$film);
        $this->acteur[$role->getNom()]=$acteur;
        $s=$this->acteur;
        return $s;
    }
    public function getActeur()
    {
        return $this->acteur;
    }
    public function printActeur()
    {
        $s="";
        foreach ($this->getActeur() as $key =>  $value) {
            $s.= $value->getNomPrenom() ." dans le role de  ". $key . "<br>";
        }
        return $s;
    }

    
    public function infoFilm()
    {
        $s="<br> info film <br> ************** <br>";
        $s.="le titre de film : " . $this->getTitre() . "<br>";
        $s.="le film est sortie en : " .$this->getDateDeSortie() . "<br>";
        $s.="la durée du film : " .$this->getDuree() . "<br>";
        $s.="le ou les genre du film : " .$this->printGenre() . "<br>";
        $s.="les acteurs de film : <br> " .$this->printActeur();
        $s.="le réalisateur du film : " .$this->getRealisateurNomPrenom() . "<br>";
        return $s;
    }


   

}