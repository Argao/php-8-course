<?php 

declare(strict_types=1);
namespace App;
use DateTime as DT;
new DT();
// class Account{
//     public string $name;
//     public float $balance;

//     public function __construct(string $name,float $balance)
//     {
//         $this->name = $name;
//         $this->balance = $balance;
//     }
    
// }


class Account{
    public const INTESREST_RATE = 2;
    public static int $count = 0;

    public SocialMedia $socialMedia;

    public function __construct(private string $name,private float $balance){
        $this-> socialMedia = new SocialMedia();

        self::$count++;
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;
        return $this;
    }

    public function getBalance()
    {
        return "$" . $this->balance;
    }

    public function setBalance(float $balance)
    {
        if ($balance < 0){
            return;
        }

        $this->balance = $balance;
        $this->sendEmail();
    }

    private function sendEmail()
    {

    }



}