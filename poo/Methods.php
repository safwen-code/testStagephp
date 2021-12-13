<!-- les methodes statiques -->
 <?php
 class Pont
 {
     public static function valideTaille(float $taille): bool
     {
         if ($taille < 50.5) {
             trigger_error('La longeur est trop cort (min 50m)', E_USER_ERROR);
         }
         return true;
     }
 }
 var_dump(Pont::valideTaille(150.5));
 var_dump(Pont::valideTaille(25.1));
 ?>

<!-- self pour cibler une methode statique -->
  <?php
  class Pont
  {
      public static function valideTaille(float $taille): bool
      {
          if ($taille < 50.2) {
              trigger_error('la taille est trop court', E_USER_ERROR);
          }
          return true;
      }
      public function setLongeur(float $longeur): void
      {
          self::valideTaille($longeur);
          $this->longeur = $longeur;
      }
  }
  $towerBridge = new Pont();
  $towerBridge->setLongeur(20.5);
  ?>
<!-- mettre a jour d'une propriété statique -->
  <?php
  class Pont
  {
      public static int $nomberPietons = 0;
      public function nouveauPieton()
      {
          self::$nomberPietons++;
      }
  }

  $pontLondres = new Pont();
  $pontLonders->nouveauPieton();
  $pontManhattan = new Pont();
  $pontManhattan->nouveauPieton();
  echo Pont::$nomberPietons;
  ?>
<!-- les valeurs immuables  const-->
  <?php
  class Pont
  {
      private const Unite = 'm²';
      private float $longeur;
      private float $largeur;
      public function getSurface(): string
      {
          return $this->longeur * $this->largeur . self::Unite;
      }
  }
  $towerBridge = new Pont();
  $towerBridge->longeur = 50.2;
  $towerBridge->largeur = 30.5;
  echo $towerBridge->getSurface();


?>
