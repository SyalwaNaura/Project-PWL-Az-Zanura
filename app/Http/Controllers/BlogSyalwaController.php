<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use \Cache;

class BlogSyalwaController extends Controller
{
    public function HomeController(){
		$articles = \App\Article::all();
		//$value = Cache::rememberForever('articles',function(){
		//	return \App\Article::all();
	//	});
			return view('home',['liat'=>$articles]);
		

        //return $articles;
	//}
		//$articlesAll = Article::all();
		//$articlesAll = json_decode(json_encode($articlesAll));
 
		 //return view('home')->with(compact('articlesAll'));
	 }


	public function AboutController(){
		return view('About');
	}

	public function ArticleController($id){
        return Article::find($id);
	}
	
	public function index(){
		return view('index');
	}

}
