<?php
class Cours{
  private $id_cours;
  private $libelle;
  private $heure_debut;
  private $duree;
  private $jour_semaine;

#  public function __construct($heure_debut, $heure_fin, $jour_semaine){
#    $this->set_heure_debut($heure_debut);
#    $this->set_heure_fin($heure_fin);
#    $this->set_jour_semaine($jour_semaine);
#  }

  public function set_heure_debut($heure_debut){
    $this->heure_debut = $heure_debut;
  }

  public function set_heure_fin($heure_fin){
    $this->heure_fin = $heure_fin;
  }

  public function set_jour_semaine($jour_semaine){
    $this->jour_semaine = $jour_semaine;
  }

  public function get_heure_debut(){
    return $this->heure_debut;
  }

  public function get_heure_fin(){
    return $this->heure_fin;
  }

  public function get_jour_semaine(){
    return $this->jour_semaine;
  }

  public function print(){
    print("je suis le cours ".$this->get_heure_debut()." ".$this->get_heure_fin()
      ." ".$this->get_jour_semaine());
  }
}

$cou = new Cours(4,5,"lundi");
$cou->print();

?>
