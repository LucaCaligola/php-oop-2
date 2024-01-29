<?php




class Category {
    public $name;
    public $description;


    function __construct(String $_name, $_description) {
        $this->name = $_name;
        $this->description = $_description;
    }
   
    public function getName() {
        return $this->name;
    }

    
    };


?>