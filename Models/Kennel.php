<?php



require_once __DIR__ . '/Product.php';

class Kennel extends Product {
    protected $size;

    function __construct(string $_name, string $_description, string $_image, float $_price, Category $_category, String $_size) {
        parent::__construct($_name, $_description, $_image, $_price, $_category);
        $this->size = $_size;
    }

    public function getSize(){
        return $this->size;
    }

   
}