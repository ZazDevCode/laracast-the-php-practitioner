<?php

/*** User: Sascha Wernars */

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 */

class Connection{
    public static function make($config){
        try{
            // return new PDO(
            //     'mysql:host=db;port=3306;dbname=mytodo',
            //     'root',
            //     'example',
            // );

            return new PDO(
                $config['connection'].';port='.$config['port'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options'],
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}