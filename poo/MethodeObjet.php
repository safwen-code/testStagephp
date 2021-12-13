
<?php
class Pont
{
    private float $longeur;
    private float $largeur;
    public function setLongeur(float $longeur): void
    {
        $this->longeur = $longeur;
    }
    public function setLargeur(float $largeur): void
    {
        $this->largeur = $largeur;
    }
}
$towerBridge = new Pont();
$towerBridge->setLongeur(258.02);
$towerBridge->setLargeur(20.4);
?>
<!-- __consturct  in public-->
<?php
 
  declare(strict_types=1);
 
  class Pont
   {
    private float $longueur;
    private float $largeur;
 
    public function __construct(float $longueur, float $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
   }
 
   $towerBridge = new Pont(286.0, 62.0);
?>

<!-- __construct in private -->
   <?php
     declare(strict_types=1);
   
    class Pont
      {
        public function __construct(private float $longueur, private float $largeur)
        {
        }
      }
  
     $towerBridge = new Pont(286.0, 62.0);
     var_dump($towerBridge);
    ?>

