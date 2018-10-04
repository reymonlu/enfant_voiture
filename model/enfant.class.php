<?php
class Enfant
{
  private $prenom;
  private $nom;

#  public function __construct($prenom, $nom){
#    $this->set_prenom($prenom);
#    $this->set_nom($nom);
#  }

  public function set_prenom($prenom){
    $this->prenom = $prenom;
  }

  public function set_nom($nom){
    $this->nom = $nom;
  }

  public function get_prenom(){
    return $this->prenom;
  }

  public function get_nom(){
    return $this->nom;
  }

  public function print(){
    echo "je suis l'enfant ".$this->get_prenom()." ".$this->get_nom();
  }
}

?>
