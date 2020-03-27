<a href=" ./index.php" title="index"> index</a>
<br>

<?php
class Compte
{
    // Properties
    
    private $libellé;
    private $soldeInitial;
    private $deviseMonétaire;
    private $titulaire;

  

    public function __construct($c_libellé, $c_soldeInitial, $c_deviseMonétaire,$c_titulaire)
    {
        $this->libellé = $c_libellé;
        $this->soldeInitial = $c_soldeInitial;
        $this->deviseMonétaire = $c_deviseMonétaire ;
        $this->titulaire = $c_titulaire ;
    }
    // Methods
    function getLibellé()
    {
        return $this->libellé;
    }
    function setLibellé($p_libellé)
    {
        $this->libellé = $p_libellé;
    }
    function getSoldeInitial()
    {
        return $this->soldeInitial;
    }
    function setSoldeInitial($p_soldeInitial)
    {
        $this->marqusoldeInitiale = $p_soldeInitial;
    }
    function getDeviseMonétaire()
    {
        return $this->deviseMonétaire;
    }
    function setDeviseMonétaire($p_deviseMonétaire)
    {
        $this->deviseMonétaire = $p_deviseMonétaire;
    }
    function getTitulaire()
    {
        return $this->titulaire;
    }
    function setTitulaire($p_titulaire)
    {
        $this->titulaire = $p_titulaire;
    }

    public function créditer ($p_crédit )
    {
        $this->soldeInitial +=$p_crédit;
    }
    public function débiter ($p_debit)
    {
        $this->soldeInitial -=$p_debit;
    }

    function virement($virement , $comptecredi ){
       $this->débiter($virement);
       $comptecredi->créditer($virement);
    }
    
    function infoCompt(){
        {   
           
            $s="";
            $s.= "<br> info <br> ************** <br>";
            $s.= "le libellé su compte : " . $this->getLibellé() ."<br>";
            $s.= "le solde du compte" . $this->getSoldeInitial() ."<br>" ;
            $s.= "La devise du compte " .$this->getDeviseMonétaire() . "<br>";
            $s.= "le nom et prenom du titulaire <br><br>";
            return  $s;
        }
    }
}
class Titulaire
{
    // Properties
    
    private $nom ;
    private $prénom ;
    private $dateDeNaissance ;
    private $ville ;
    private $compts ;

  

    public function __construct($c_nom, $c_prénom, $c_dateDeNaissance,$c_ville,$c_compts)
    {
        $this->nom = $c_nom;
        $this->prénom = $c_prénom;
        $this->dateDeNaissance = $c_dateDeNaissance;
        $this->ville = $c_ville ;
        $this->compts = $c_compts ;
    }
        // Methods
        function getNNom($p_nom){
            $this->nom = $p_nom;
        }
        function setNom($p_nom){
            $this->nom = $p_nom;
        }
        function getPrénom(){
            return $this->prénom;
        }
        function setPrénom($p_prénom){
            $this->prénom = $p_prénom;
        }
        function getDateDeNaissance(){
            return $this->dateDeNaissance;
        }
        function setDateDeNaissance($p_dateDeNaissance){
            $this->dateDeNaissance = $p_dateDeNaissance;
        }
        function getVille(){
            return $this->ville;
        }
        function setVille($p_ville){
            $this->ville = $p_ville;
        }
}

$t1 = new Titulaire("Rioux","Simon","16/03/1996","Labroque",$ct1);
$c1 = new Compte("compte courent", 100, "euros",$t1);
$c2 = new Compte("Livret A", 100, "euros",$t1);
$ct1 = [$c1, $c2 ];

?>