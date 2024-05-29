<?php
declare(strict_types=1);

// require_once 'App/Account.php';
// require_once 'App/SocialMedia.php';

spl_autoload_register(function($class){
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    
    require_once $path;
});

use App\{Account, SocialMedia, Utility,ToasterPremium,Restaurant1,RestaurantTwo,FoodApp,EmptyArrayException};

//$myAccount = new Account('João', 20);
//
//
//$myToaster = new ToasterPremium();

//$myToaster->toast();

//
//$restaurant = new FoodApp(new RestaurantTwo());


try {
    Utility::printArr([]);
}catch (EmptyArrayException $e){
    echo "Custom exception: {$e->getMessage()} </br>";
}catch (Exception $e){
    echo "Generic exception: {$e->getMessage()} </br>";
} finally {
    echo "Finally block </br>";
}




echo "Finished running script";