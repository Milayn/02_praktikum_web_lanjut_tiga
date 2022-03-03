<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function eduGames(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">Halaman Marbel Educational Game</a>';
    }

    public function kidsGames(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Halaman Marbel and Friends Kids Games</a>';
    }

    public function storyBooks(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">Halaman Riry Story Books</a>';    
    }
    
    public function kidSongs(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">Halaman Kolak Kids Songs</a>';
    }
}

