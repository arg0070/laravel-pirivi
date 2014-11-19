<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemController
 *
 * @author blank
 */
class ItemController extends BaseController {
     public function listPost()
    {
        $items = Item::orderBy('id', 'desc')->paginate(10);
        $this->layout->title = 'Items listings';
        //$this->layout->main = View::make('dash')->nest('content', 'posts.list', compact('posts'));
    }

    public function showItem(Item $item)
    {      
        $this->layout->title = 'Piriví - '.$item->name;
        $this->layout->main = View::make('home')->nest('content', 'single', compact('item'));
    }
    public function showQuest(){
        $this->layout->title = 'Piriví - Encuenta de usuario';
        $this->layout->main = View::make('quest');
    }

    }
