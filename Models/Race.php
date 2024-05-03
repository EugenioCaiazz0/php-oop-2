<?php

class Race extends Product {

    public $race;

    function __construct(string $_item_name, string $_image, float $_price, int $_discount, string $_category, string $_race){
 
      parent::__construct($_item_name, $_image, $_price, $_discount, $_category);

      $this->race = $_race;
  }

}