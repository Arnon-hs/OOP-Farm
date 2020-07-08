<?php
namespace App\Models;

class Cow extends Animal
{
    /**
     * @var int
     */
    protected $minProductQuantity = 8;
    /**
     * @var int
     */
    protected $maxProductQuantity = 12;

    /**
     * Cow constructor.
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