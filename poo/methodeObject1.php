<!-- __clone && __toString    -->
  
 <?php 
  declare(strict_types=1);
  class Tablier {
      public function __construct(public float $longeur , public float $largeur){

      }
  }
  class Pont{
      public function __construct(protected string $name , protected Tablier $tablier){
          public __clone(){
              $this->tablier = clone $this->tablier;
          }
      }
  }
 $pont1 = new Pont(name :'menhaten', new Tablier(longeur:600.5, largeur:50.2));
 $pont2 = clone $pont1;
 echo $pont2;
 ?>
<!-- __toString -->
 <?php 
  class Tablier {
    public function __construct(protected float $longeur , public float $largeur){

    }
  }
  class Pont{
    public function __construct(protected string $name , protected Tablier $tablier){
        public function __toString(){
            return sprintf('ce peut mesure ', $this->tablier->longeur , $this->tablier->largeur);
        }
    }
   } 
    $pont1 = new Pont('menhaten', new Tablier(longeur:600.5, largeur:50.2));

    echo $pont1;
 
 ?>

 <?php 
 
 ?>