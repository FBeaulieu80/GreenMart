<?php

class Cart
{

    private string $productID;
    private string $prodName;
    private string $aisle;
    private string $price; // float?
    private string $discount;
    private string $quantity;
    private string $origin;
    private string $description;
    private string $seller;
    private string $status;

    /**
     * Cart constructor.
     * @param string $productID
     * @param string $prodName
     * @param string $aisle
     * @param string $price
     * @param string $discount
     * @param string $quantity
     * @param string $origin
     * @param string $description
     * @param string $seller
     * @param string $status
     */
    public function __construct(string $productID, string $prodName, string $aisle, string $price, string $discount, string $quantity, string $origin, string $description, string $seller, string $status)
    {
        $this->productID = $productID;
        $this->prodName = $prodName;
        $this->aisle = $aisle;
        $this->price = $price;
        $this->discount = $discount;
        $this->quantity = $quantity;
        $this->origin = $origin;
        $this->description = $description;
        $this->seller = $seller;
        $this->status = $status;
    }



}