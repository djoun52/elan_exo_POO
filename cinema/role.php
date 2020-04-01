<?php
class Role
{
    // Properties

    protected  $nom;
    public $acteur= [];

    public function __construct(string $c_nom)
    {
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
    public function getActeur()
    {
        return $this->acteur;
    }
    public function addActeur($acteur,$film){
        $this->acteur[$film->getTitre()]=$acteur;
        $s=$this->acteur;
        return $s;
    }
    public function getInfoActeur(){
        $s="<br> info role <br> ************** <br>";
        $s.="le role de". $this->getNom() . " à été inerpréter par : <br> ";
        foreach ($this->getActeur() as $key => $value){
            $s.= $value->getNomPrenom() . " dans $key <br> ";
        }
        return $s;
    }
    
}
