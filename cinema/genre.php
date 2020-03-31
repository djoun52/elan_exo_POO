<?php
class Genre
{
    // Properties
    
    protected  $nom;
    public $film = [];

  

    public function __construct(string $c_nom ){
        is_string($c_nom) ? $this->nom = $c_nom : NULL;
    }
    
     // Methods
     public function getNom()
     {
         return $this->nom;
     }
     public function setNom($p_nom)
     {
         $this->nom = $p_nom;
     }
     public function addFilm($param){
       
        return array_push($this->film,$param);
    }
     public function getInfoFilm(){
       $s="Les film du genre ". $this->getNom() . " : <br>";
        foreach ($this->film as $value){
            $s.= $value->getTitre() ."<br>";
        }
 
    }
}