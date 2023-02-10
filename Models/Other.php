<?php
    class Other extends Product {
    public $materials;
    public $size;

    function __construct($_name,$_category,$_price,$_image,$_materials,$_size){
        parent::__construct($_name, $_category, $_price, $_image);
        $this->materials = $_materials;
        $this->size = $_size;
    }
}
?>