<?php 
 class Pont {
     private string $unit='m';
     public float $longeur;
     public float $largeur;
     public function getSurface():string{
         return ($this->longeur * $this->largeur).$this->$unit;
     }
 }
 $towerBridge = new Pont;
 $towerBridge->longeur=286.0;
 $towerBridge->largeur=15.25;
 echo $towerBridge->getSurface();



?>