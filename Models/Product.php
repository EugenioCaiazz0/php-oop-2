<?php 

require_once __DIR__ . '/Origin.php';

class Product {
  
    use Origin;

    public $item_name;
    public $image;
    public $price;
    public $discount; 
    public $category;
    public $animal;

    function __construct(string $_item_name, string $_image, float $_price, int $_discount, string $_category, string $_animal){
  
      $this->item_name = $_item_name;
      $this->image = $_image;
      $this->price = $_price;
      $this->discount = $_discount;
      $this->category = $_category;
      $this->animal = $_animal;

    }

    public function setDiscount($_discount){
      $this->discount = $_discount;
    }

    public function setPrice($_discount){
      if($_discount = 1){
         return $this->price = ($this->price * 0.8);
        }
    }

    public function setName($_item_name){
      if($_item_name == ''){
        throw new Exception('Il prodotto non è disponibile');
      }
    }

}


?>
