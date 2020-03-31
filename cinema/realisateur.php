<?php
class Realisateur
{
    // Properties
    
    protected $nom ;
    protected $prenom ;
    protected $dateDeNaissance ;
    public $film; 

    public function __construct($c_nom, $c_prenom, $c_dateDeNaissance){

        is_string($c_nom) ? $this->nom = $c_nom : NULL;
        is_string($c_prenom) ? $this->prenom = $c_prenom : NULL ;
        $this->dateDeNaissance = $c_dateDeNaissance;
     
    }


    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($p_nom)
    {
        $this->nom = $p_nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($p_prenom)
    {
        $this->nom = $p_prenom;
    }
    public function getNomPrenom()
    {
        $s= $this->nom . " " . $this->prenom;
        return $s;
    }
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
    public function setDateDeNaissance($p_dateDeNaissance)
    {
        $this->dateDeNaissance = $p_dateDeNaissance;
    }
    public function getAge(){
        $date= new DateTime();
        $date1= new DateTime ($this->getDateDeNaissance());
        $diff=date_diff($date1,$date);
        return $diff->format(" %y ans");
    }
    public function addFilm($film){
       
        return array_push($this->film,$film);
    }
    public function getInfoFilm(){
        $s="Les film réalisé par  ". $this->getNomPrenom() . " sont : <br>";
         foreach ($this->film as $value){
             $s.= $value->getTitre() ."<br>";
         }
  
     }
}