<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Posts;

use App\Destacados;

class IndexController extends Controller
{
    public function index()
    {	
    	$posts = Destacados::paginate(5);

    	return view('index', compact('posts'));
    }
}
