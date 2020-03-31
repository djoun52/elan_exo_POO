<?php
class Compte
{
    // Properties
    
    protected  $libelle;
    protected  $soldeInitial;
    protected  $deviseMonétaire;
    protected  $numero;
    public      $client;
  

    public function __construct(string $c_libelle,int  $c_soldeInitial,string $c_deviseMonétaire,$c_client,$c_numero)
    {
        is_string($c_libelle) ? $this->libelle = $c_libelle : NULL;
        is_int($c_soldeInitial) ? $this->soldeInitial = $c_soldeInitial : NULL;
        is_string($c_deviseMonétaire) ?$this->deviseMonétaire = $c_deviseMonétaire : NULL ;
        is_object($c_client) ? $this->client = $c_client : NULL;
        is_int($c_numero) ? $this->numero = $c_numero : NULL;
        $this->client = $c_client;
     
    }
    // Methods
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($p_libelle)
    {
        $this->libelle = $p_libelle;
    }
    public function getSoldeInitial()
    {
        return $this->soldeInitial;
    }
    public function setSoldeInitial($p_soldeInitial)
    {
        $this->marqusoldeInitiale = $p_soldeInitial;
    }
    public function getDeviseMonétaire()
    {
        return $this->deviseMonétaire;
    }
    public function setDeviseMonétaire($p_deviseMonétaire)
    {
        $this->deviseMonétaire = $p_deviseMonétaire;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($p_numero)
    {
        $this->numero = $p_numero;
    }
    public function getClientNom()
    {
        $s = "";
        $c= $this->client;
        $s.= $c->getNom();
        return $s;
    }
    public function getClientPrenom()
    {
        $s = "";
        $c= $this->client;
        $s.= $c->getPrenom();
        return $s;
    }
    public function getClientage()
    {
        $s = "";
        $c= $this->client;
        $s.= $c->getAge();
        return $s;

    }
    public function getClientInfo(){
        $s ="";
        $s.= " " . $this->getClientNom() . " " . $this->getClientPrenom()  ;
        return $s;
    }




    public function créditer ($montant)
    {
        return $this->soldeInitial +=$montant;
    }
    public function débiter ($montant)
    {
        return $this->soldeInitial -=$montant;
    }

    public function virement($virement , $comptecredi ){
 
       $s=  $this->débiter($virement);
       $s.=$comptecredi->créditer($virement);
       return $s;
    }
    
    function infoCompt(){
        {   
   
            $s="";
            $s.= "<br> info compte <br> ************** <br>";
            $s.= "Le numéro du compte : " .$this->getNumero() . "<br>";
            $s.= "le libellé du compte : " . $this->getLibelle() ."<br>";
            $s.= "le solde du compte :" . $this->getSoldeInitial() ."<br>" ;
            $s.= "La devise du compte : " .$this->getDeviseMonétaire() . "<br>";          
            $s.= "le nom et prenom du titulaire" . $this->getClientInfo() ."<br><br>";
            return  $s;
        }
    }
    function infoComptC(){
        {   
   
            $s="";
            $s.= "Le numéro du compte : " .$this->getNumero() . "<br>";
            $s.= "le libellé du compte : " . $this->getLibelle() ."<br>";
            $s.= "le solde du compte :" . $this->getSoldeInitial() ."<br>" ;
            $s.= "La devise du compte : " .$this->getDeviseMonétaire() . "<br><br>";
            return  $s;
        }
    }
 
}
