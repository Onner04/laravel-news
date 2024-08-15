<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\news;
use App\Models\slide;
use App\Models\typeNews;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $slide = slide::all();

        $category = category::all();
        

        $type = typeNews::all();

        $new = news::all();

        return view('home',compact('slide','category','type','new'));
    }
}
