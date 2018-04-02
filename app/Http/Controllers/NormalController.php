<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Category;
use App\Tag;
use Carbon\Carbon;
class NormalController extends Controller
{
	public function __construct(){
		Carbon::setLocale('es');
	}
    public function index(Request $request){

    	$articles = Article::search($request->name)->OrderBy('id','DESC')->paginate(12);
        $category = Category::OrderBy('id','DESC')->get();
        $tags = Tag::OrderBy('id','DESC')->get();

    	return view('normal.index')
    	->with('articles',$articles)
        ->with('category',$category)
        ->with('tags',$tags);

    }
    public function searchCategory($name){

       $category = Category::SearchCategory($name)->first();

        if(count($category) == 0){
            return view('errors.404');
        }

       $articles = $category->articles()->paginate(12);

       $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
       $category = Category::OrderBy('id','DESC')->get();
       $tags = Tag::OrderBy('id','DESC')->get();

       return view('normal.index')
        ->with('articles',$articles)
        ->with('category',$category)
        ->with('tags',$tags);
    }

    public function searchTag($name){

        $tag = Tag::SearchTag($name)->first();

        if(count($tag) == 0){
            return view('errors.404');
        }
        $articles = $tag->articles()->paginate(12);

        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });

        $category = Category::OrderBy('id','DESC')->get();
        $tags = Tag::OrderBy('id','DESC')->get();

       return view('normal.index')
        ->with('articles',$articles)
        ->with('category',$category)
        ->with('tags',$tags);

    }

    public function viewArticle($id){
      $article = Article::find($id);
      $article->category;
      $article->user;
      $article->tags;
      $article->images;


     $category = Category::OrderBy('id','DESC')->get();
     $tags = Tag::OrderBy('id','DESC')->get();

     return view('normal.article')
     ->with('article',$article)
     ->with('category',$category)
     ->with('tags',$tags);
    }
}
