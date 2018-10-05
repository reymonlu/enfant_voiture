<?php
class Trajet
{
  private $cours;
  private $tuteur;

#  public function __construct($cours, $tuteur){
#    $this->set_cours($cours);
#    $this->set_tuteur($tuteur);
#  }

  public function set_cours($cours){
    $this->cours = $cours;
  }

  public function set_tuteur($tuteur){
    $this->tuteur = $tuteur;
  }

  public function get_cours(){
    return $this->cours;
  }

  public function get_tuteur(){
    return $this->tuteur;
  }

  public function print(){
    echo "je suis l'Trajet ".$this->get_cours()." ".$this->get_tuteur();
  }
}

?>
