<?php 

class Product {
  
    public $item_name;
    public $image;
    public $price;
    private $discount = 0; 
    public $category;

    function __construct(string $_item_name, string $_image, float $_price, int $_discount, string $_category){
  
      $this->item_name = $_item_name;
      $this->image = $_image;
      $this->price = $_price;
      $this->discount = $_discount;
      $this->category = $_category;

    }

    private function setDiscount($_discount){
        if($_discount = 1){
          $this->price = ($this->price * 0.8);
        }
    }
}

?>
