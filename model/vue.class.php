<?php
class View{
  private $_path="";


  function __construct(string $path=""){
    $this->_path = $path;
  }

  function show(string $path=""){
    $p = $path ? $path : $this->_path;

    if($p[0] != '.'){
      $p = "../view/".$p;
    }
    include($p);
  }
}
 ?>
