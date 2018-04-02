<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Image;

class ImagesController extends Controller
{
    public function index(){
    	$images = Image::orderBy('id','ASC')->paginate(12);
    	$images->each(function($images){
    		$images->article;
    	});

    	return view('admin.images.index')->with('images',$images);
    }
}
