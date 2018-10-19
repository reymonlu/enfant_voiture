<?php

class Erreur
{

  public function verif_id($id){
    return $id % 42 == 0;
  }
}
