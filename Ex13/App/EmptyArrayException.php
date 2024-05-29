<?php

namespace App;

use Exception;

class EmptyArrayException extends Exception
{
    protected $message = "Array is empty";

}