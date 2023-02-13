<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($type = 'Cellphone', $product_id = 'Samsung')
    {   
        echo '<h2>This is a product: '.$type.' with an id: '.$product_id.'</h2>';
        //return view('product'); 
    }


    
}
