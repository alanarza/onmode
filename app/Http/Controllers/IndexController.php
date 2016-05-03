<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Posts;

use App\User;

class IndexController extends Controller
{
    public function index()
    {	
    	$id = User::where('role','admin')
    				->select('id')
    				->get();

    	$post = Posts::latest('id')->first();

    	return view('index', compact('post'));
    }
}
