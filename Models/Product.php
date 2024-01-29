<?php


class Product {

    public $name;
    public $description;
    public $image;
    public $category;
    public $price;

    


    function __construct(String $_name, String $_description,String $_image, Float $_price, Category $_category) {
        $this->name = $_name;
        $this->description = $_description;
        $this->image = $_image;
        $this->price = $_price;
        $this->category = $_category;
    }


    public function getName(){
        return $this->name;
    }


    public function getDescription(){
        return $this->description;
    }

    public function getImageUrl(){
        return $this->image;
    }

    public function getCategory($logged){
        return $this->category;
    }



    public function getProductInfo () : string {
        return $this->name . ' ' . $this->description . ' ' . $this->image . ' ' . $this->category->name . ' ';
    }
    public function getAdditionalInfo(){
        return false;
        }
    }

