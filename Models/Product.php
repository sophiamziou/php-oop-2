<?php
    class Product {
    public $name;
    public $category;
    public $price;
    public $image;
    
    function __construct($_name,$_category,$_price,$_image){
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
        $this->image = $_image;
    }

    public function getType(){
        return get_class($this);
    }
}
?>