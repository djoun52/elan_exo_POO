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
        is_string($c_titre) ? $this->libelle = $c_titre : NULL;
        $this->soldeInitial = $c_dateDeSortie;
        is_int($c_durée) ? $this->numero = $c_durée : NULL;
        is_string($c_synopsis) ?$this->deviseMonétaire = $c_synopsis : NULL ;
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
    public function addGenre($param){
        $param->addFilm();
        return array_push($this->genre,$param);
    }
    public function addActeur($acteur,$role,$film){
        $acteur->addRole($role,$film);
        $this->acteur[$role->getNom()]=$acteur;
        $s=$this->acteur;
        return $s;
    }
    
   

}