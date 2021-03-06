<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

	//
	public function index()
	{
		$articles = Article::all();
		return view('articles.index',compact('articles'));
	}

	public function show($id)
	{
		$articles = Article::findOrFail($id);
		return view('articles.show',compact('articles'));
	}

	public function login()
	{
		return view('auth.login');
	}
}
