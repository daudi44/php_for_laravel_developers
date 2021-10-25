<?php
use Framework;

class App{
    private $container = [];

    public function bind($key, $value)
    {
        $this->container[$key] = $value;
    }

    public function get($key)
    {
        if(! array_key_exists($key, $this->container)){
            throw new Exception("No {$key} is bound in the container.");
        }
        return $this->container[$key];
    }
}