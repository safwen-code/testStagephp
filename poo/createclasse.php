<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<!-- 
   create classe     test variabel-->
    <?php
    class Pont
    {
        public float $longeur;
        public float $largeur;
    }

    $pont = new Pont();
    $pont->longeur = 263.0;
    $pont->largeur = 50.0;
    $Surface = $pont->longeur * $pont->largeur;
    var_dump($Surface);
    ?>
<!-- create class  test function     -->
     <?php
     class Point
     {
         public float $longeur;
         public float $largeur;
         public function getSurface(): float
         {
             return $this->longeur * $this->largeur;
         }
     }
     $point = new Point;
     $point->longeur = 50.2;
     $point->largeur = 12.56;
     $Surface = $point->getSurface();
     var_dump($Surface);
     ?> 
<!-- create des multi instance du class point -->
     <?php 
       class Point{
           public float $longeur;
           public float $Largeur;
           public function surface():float{
               return $this->longeur * $this->Largeur;    
           }
       }
        $point1 = new Point;
        $point1->longeur =5 ;
        $point1->Largeur =5.25;
        $surface1 = $point1->surface();
        var_dump($surface1);

     ?>  



























</body>
</html>