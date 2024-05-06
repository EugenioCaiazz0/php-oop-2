<?php

trait Position {
  public $origin_place;

  public function getOrigin() {
 
     return "$this->origin_place";
 
  }
}