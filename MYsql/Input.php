<?php
class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        if(isset($_REQUEST[$key])){
            return true;
        }else{
            return false;
        }
    }
    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (isset($_REQUEST[$key])){
            return $_REQUEST[$key];
        }else{
            return $default;
        }
    }
    public static function getString($key)
    {
        $value = static::get($key);
        htmlspecialchars(strip_tags(trim($value)));
        if (is_string($value)) {
            return $value;
        }else{
            throw new Exception("Error Processing Request: Input cannot be empty");
        }
    }
    public static function getNumber($key)
    {
        $value = str_replace(',', '', static::get($key));
        if (!is_numeric($value)) {
            throw new Exception("Error Processing Request: Input must be a number");
            
        }else{
            if ($value > 0) {
               return $value;
            }else{
                throw new Exception("Error Processing Request: Value can not be negative");
            }
        }
    }
    public static function getDate($key)
    {
        $value = static::get($key);
        $format = 'm-d-Y';
        $dateObject = new DateTime($value);
        if ($dateObject) {
            return $dateObject->format($format);
        }else{
            throw new Exception("Error Processing Request: Input must be valid date");
            
        }
    }
 
    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}