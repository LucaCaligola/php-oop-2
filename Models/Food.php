
<?php


require_once __DIR__ . './Prduct.php';

class Food extends Product {

    public $type;
    public $weight;



    function __construct(string $_name, string $_description, string $_imageUrl, float $_price, Category $_category, Int $_type, Int $_weight) {
        parent::__construct($_name, $_description, $_imageUrl, $_price, $_category);
        $this->type = $_type;
        $this->weight = $_weight;
    }


    public function getType(){
        return $this->type;
    }

    public function getWeight(){
        return $this->weight;
    }
}