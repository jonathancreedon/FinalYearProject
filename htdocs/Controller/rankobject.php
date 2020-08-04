<?php

class Rank {
  public $name;
  public $satisfaction;
  public $usefulness;
  public $score;
  public $avsal;

  //construct has TWO underscores;
  function __construct($name, $satisfaction,$usefulness,$avsal) {
    $this->name = $name;
    $this->score = 0;
    $this->satisfaction = $satisfaction;
    $this->usefulness = $usefulness;
    $this->avsal = $avsal;
  }
  
  function get_name() {
    return $this->name;
  }

  function get_score() {
    return $this->score;
  }

  function get_satisfaction() {
    return $this->satisfaction;
  }

  function get_usefulness() {
    return $this->usefulness;
  }

  function get_avsal() {
    return $this->avsal;
  }
  
  
  }
  
?>