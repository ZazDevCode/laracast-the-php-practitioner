<?php

/*** User: Sascha Wernars */

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 */

class App{

    protected static $registry = [];

    public static function bind($key, $value){
        static::$registry[$key] = $value;
    }

    public static function get($key){
        if(!array_key_exists($key, static::$registry)){
            throw Exception("No {$key} is bound in the comntainer.");
        }
        return static::$registry[$key];
    }
}