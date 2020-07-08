<?php
namespace App\Models;

class Chicken extends Animal
{
    /**
     * @var int
     */
    protected $maxProductQuantity = 1;
    /**
     * @var int
     */
    protected $minProductQuantity = 0;

    /**
     * Chicken constructor.
     */
    public function __construct()
    {
        parent::__construct($this->minProductQuantity, $this->maxProductQuantity);
    }

    /**
     * @return int
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function productQuantity()
    {
        return $this->productQuantity;
    }
}