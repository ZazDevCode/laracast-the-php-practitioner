<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'root',
        'password' => 'example',
        'port' => '3306',
        'connection' => 'mysql:host=db', // host=db, which is the name of your mysql in docker
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];

