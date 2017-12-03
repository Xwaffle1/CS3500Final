<?php

/**
 * Created by PhpStorm.
 * User: chase
 * Date: 12/3/2017
 * Time: 12:53 AM
 */
class Product {

    public $id;
    public $itemName;
    public $itemDesc;
    public $price;
    public $imagePath;
    public $categoryID;

    /**
     * Product constructor.
     * @param $row
     */
    public function __construct($row) {
        $this->id = $row["ID"];
        $this->itemName = $row["ItemName"];
        $this->itemDesc = $row["ItemDesc"];
        $this->price = $row["ItemPrice"];
        $this->imagePath = $row["ImagePath"];
        $this->categoryID = $row["CategoryID"];
    }

    public function getCategoryID(){
        return $this->categoryID;
    }
}