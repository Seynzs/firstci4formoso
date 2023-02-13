<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    function validation()
    {
        $shop =  new Shop();
        echo $shop->product('Cellphone', 'Samsung');

        $adminShop = new AdminShop();
        echo $adminShop->product('Cellphone', 'Samsung');
    }

    function show404(){
        echo 'This is a 404 page';
    }
}
