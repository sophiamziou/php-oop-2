<?php
    class Game extends Product {
    public $feature;
    public $size;

    function __construct($_name,$_category,$_price,$_image,$_feature,$_size){
        parent::__construct($_name, $_category, $_price, $_image);
        $this->feature = $_feature;
        $this->size = $_size;
    }
}
?>