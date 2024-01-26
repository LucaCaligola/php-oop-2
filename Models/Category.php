<?php




class Category {
    public $name;

    function __construct(String $name) {
        $this->name = $name;
    }
   
    public function getName(): String {
        return $this->name;
    }

    
    };


?>