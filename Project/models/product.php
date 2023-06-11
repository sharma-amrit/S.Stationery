<?php

class Product
{
    private $id;
    private $name;
    private $category;
    private $description;
    private $price;
    private $rating;
    private $productKey;

    public function __construct($name, $category, $description, $price, $rating, $productKey)
    {
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
        $this->price = $price;
        $this->rating = $rating;
        $this->productKey = $productKey;
    }

    // Getters and Setters

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getProductKey()
    {
        return $this->productKey;
    }

    public function setProductKey($productKey)
    {
        $this->productKey = $productKey;
    }
}
?>
