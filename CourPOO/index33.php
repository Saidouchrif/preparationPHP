<?php
// cour 61 video 62 et cour 62 video 63 et cour 63 video 64
// POO
class Ecole{
    /// attributs private // katkhdam biha ghir fi blasa li saybtiha fiha
    /// attributs public // kateyat liha fima bgiti wast l classe 3aks l private
    /// attributs protected // kateyat liha fima bgiti wast l classe
    // far9 bin public o protected fach kat3ayat ela protected bara class bhal key makatkhdamch
    // ama public kateyat eliha fi ay blasa wakha msaybha fi class
    private $nom='saidouchrif';
    public $adresse='casa';
    protected $ville='hayhassani';
    function __construct($Age,$name){
        echo "L'école est créée\n";
        echo "<br/>";
        echo "L'âge de l'école est de $Age ans\n";
        echo "<br/>";
        echo "Le nom de l'école est $name\n";
        echo "<br/>";
        echo "L'adresse de l'école est $this->adresse\n";
        echo "<br/>";
        echo "La ville de l'école est $this->ville\n";
        echo "<br/>";
        echo "Le nom de l'école est $this->nom\n";
    }
}
$app =new Ecole(19,"bno btota");
// affiche les attributs public et protected dans la classe
echo "<h1>".$app->adresse."<h1/>";
?>