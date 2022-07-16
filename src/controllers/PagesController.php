<?php

/*** User: Sascha Wernars */

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 */

class PagesController{
    public function home(){
        return view('index');
    }

    public function about(){
        $company = 'WerQdag';
        return view('about',
            ['company' => $company]
        );
    }

    public function contact(){
        return view('contact');
    }
}


