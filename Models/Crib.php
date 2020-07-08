<?php
namespace App\Models;

class Crib
{
    /**
     * @var array
     */
    private $animals = [];

    /**
     * @var array
     */
    public $options = [];

    /**
     * Crib constructor.
     * @param array $options
     */
    public function __construct(Array $options)
    {
        $this->options = $options;
    }

    /**
     * Set Animals and create it
     * @param $animal
     */
    public function setAnimals($animal)
    {
        try{
            if($animal == "cow")
                $class = Cow::class;
                else if($animal == "chicken")
                    $class = Chicken::class;
                    else
                        return;

            for ($i = 1; $i<=$this->options[$animal];$i++)
                $this->animals[$animal][$i] = new $class;

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return array
     */
    public function getAnimals() :array
    {
        return $this->animals;
    }

    /**
     * Return sum product with animal name
     * @param $animalName
     * @return int
     */
    public function productsSum($animalName) :int
    {
        $sum = 0;
        try {
            foreach ($this->animals[$animalName] as $animal)
                $sum += $animal->productQuantity;
                    return $sum;

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Return total product
     * @return int
     */
    public function allSum() :int
    {
        $sum = 0;
        try {
            foreach ($this->animals as $animal)
                foreach ($animal as $a)
                    $sum += $a->productQuantity;
                        return $sum;

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}