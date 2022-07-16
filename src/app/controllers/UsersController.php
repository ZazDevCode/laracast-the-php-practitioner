<?php

/*** User: Sascha Wernars */

namespace App\Controllers;
use App\Core\App;

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 */

class UsersController{
    public function index(){
        $users = App::get('database')->selectAll('users');
        return view('users',
            ['users' => $users]
        );
    }

    public function store(){
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        
        return redirect('users');
    }   
}