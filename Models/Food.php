<?php
    class Food extends Product {
    public $weight;
    public $ingredients;

    function __construct($_name,$_category,$_price,$_image,$_weight,$_ingredients){
        parent::__construct($_name, $_category, $_price, $_image);
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}
?>