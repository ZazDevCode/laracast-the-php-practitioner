<?php

/*** User: Sascha Wernars */;

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 */

class Request{

    public static function uri(){
        return trim($_SERVER['REQUEST_URI'], '/');
    }
    
    
}