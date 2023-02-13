<?php namespace App\Libraries;

class Blog{

    public function postItem($items){
        return view('components/post_item', $items);
    }


}