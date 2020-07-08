<?php
namespace App;

require(__DIR__.'/vendor/autoload.php');

use App\Models\Crib;

class App
{
    /**
     * App constructor.
     */
    public function __construct()
    {
        $option = getopt("", ["cow:", "chicken:"]);

        $crib = new Crib($option);
        $crib->setAnimals( 'chicken');
        $crib->setAnimals( 'cow');

        $sumEgg = $crib->productsSum('chicken');
        $sumMilk = $crib->productsSum('cow');
        $sumAll = $crib->allSum();
//        $sumAll = $sumEgg + $sumMilk;

        $message = "Total number of eggs: {$sumEgg}" . PHP_EOL;
        $message .= "Total milk: {$sumMilk}" . PHP_EOL;
        $message .= "Total: {$sumAll}" . PHP_EOL;

        echo $message;
    }
}

/**
 * Create app
 */
$app = new App();