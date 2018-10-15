<?php
class Cours{
  private $id_cours;
  private $libelle;
  private $heure_debut;
  private $duree;
  private $jour;

#  public function __construct($heure_debut, $heure_fin, $jour_semaine){
#    $this->set_heure_debut($heure_debut);
#    $this->set_heure_fin($heure_fin);
#    $this->set_jour_semaine($jour_semaine);
#  }

  public function set_heure_debut($heure_debut){
    $this->heure_debut = $heure_debut;
  }

  public function set_duree($duree){
    $this->duree = $duree;
  }

  public function set_jour($jour){
    $this->jour= $jour;
  }

  public function get_id_cours(){
    return $this->id_cours;
  }

  public function get_libelle(){
    return $this->libelle;
  }

  public function get_heure_debut(){
    return $this->heure_debut;
  }

  public function get_duree(){
    return $this->duree;
  }

  public function get_jour(){
    return $this->jour;
  }

  public function print(){
    print("je suis le cours ".$this->get_heure_debut()." ".$this->get_duree()
      ." ".$this->get_jour());
  }
}

?>
