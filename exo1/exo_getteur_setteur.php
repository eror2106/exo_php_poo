<?php

declare(strict_types=1);
//Exercez-vous et essayez de compléter la classe avec des setteu et des getteur. :) Après, vous pouvez regarder  une solution.
class Pont
{
<<<<<<< HEAD
  // private float $largeur;
  //
  private string $unite = 'm²';

  // private float $longueur;

  //return $longueur;
  public function getLongueur(private float $longueur)
  {
    return $this->longueur = $longueur;
  }
  public function getLargueur(private float $largeur)
=======
  private float $largeur;
  //
  private string $unite = 'm²';

  private float $longueur;

  //return $longueur;
  public function getLongueur($longueur)
  {
    return $this->longueur = $longueur;
  }
  public function getLargueur($largeur)
>>>>>>> cfba6b0e28976fadbddeb9afe98300cd9f2f509c
  {
    return $this->largeur = $largeur;
  }


  public function setUnite()
  {
    $affichage = "la surface fais %d %s";
    $result = ($this->largeur * $this->longueur);
    echo sprintf($affichage, $result, $this->unite);
  }
}
$pont = new Pont;
$pont->getLongueur(32);
$pont->getLargueur(64);
var_dump($pont);
$pont->setUnite();
