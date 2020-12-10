<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class ProjectSyalwaController extends Controller
{
    public function home(){
		$this->middleware('auth');
         $articles = Article::all();
         return view('home',['articles'=> $articles]);
        // $articles = Cache::rememberForever('articles', function () {
        //     return Article::all();
        // });
        // return view('home', ['articles' => $articles]);
	}

	public function search(Request $request){
		$search = $request->search;
		$result = DB::table('articles')
		->where('title','like',"%".$search."%")
		->paginate();
		return view('home',['articles'=>$result]);
	}

	
	public function about(){
		return view('about');
	}

	public function catalog(){
		return view('catalog');
	}

	public function catalog2(){
		return view('catalog2');
	}

	public function catalog3(){
		return view('catalog3');
	}
}
