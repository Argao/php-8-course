<?php

namespace App;

class Restaurant1 implements RestaurantInterface
{
    public function prepareFood()
    {
        echo "Prearing food";
    }
}