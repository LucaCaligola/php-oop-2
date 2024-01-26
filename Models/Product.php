<?php


class Producs {

    public $name;
    public $description;
    public $image;
    public $category;
    public $price;
}


function __construct(String $_name, String $_description,String $_image, Float $_price, Category $_category) {
    $this->name = $_name;
    $this->description = $_description;
    $this->imageUrl = $_image;
    $this->price = $_price;
    $this->category = $_category;
}


public function getName(){
    return $this->name;
}

public function setName (String $name){
    return $this->name = $name;
}

public function getDescription(){
    return $this->description;
}

public function getImageUrl() : String {
    return $this->imageUrl;
}

public function getPrice($logged) : Float {
    return $this->price;
}