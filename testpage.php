<?php 


class Item {
    public $plantID;
    public $plantName;
    public $category;
    public $price;
    public $quantity;
    function makeItem($plantID, $plantName, $category, $price, $quantity) {
        $this->plantID = $plantID;
        $this->plantName = $plantName;
        $this->category = $category;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}



?>