<?php
namespace App\Models;

abstract class Animal
{
    /**
     * @var int
     */
    public $productQuantity;

    /**
     * @var int
     */
    public $id;

    /**
     * @return mixed
     */
    abstract protected function id();

    /**
     * @return mixed
     */
    abstract protected function productQuantity();

    /**
     * Animal constructor.
     * @param $minProductQuantity
     * @param $maxProductQuantity
     */
    protected function __construct($minProductQuantity, $maxProductQuantity)
    {
        $this->productQuantity = $this->setProductQuantity($minProductQuantity, $maxProductQuantity);
        $this->id = $this->setId();
    }

    /**
     * @return mixed
     */
    protected function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * @param $minProductQuantity
     * @param $maxProductQuantity
     * @return int
     */
    protected function setProductQuantity($minProductQuantity, $maxProductQuantity)
    {
        return rand($minProductQuantity, $maxProductQuantity);
    }

    /**
     * @return string
     */
    protected function setId()
    {
        return $this->id = uniqid();
    }
}