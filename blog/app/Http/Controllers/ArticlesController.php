<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

class ArticlesController extends Controller
{

	public function __construct(){
		$this->middleware('auth', ['except' => ['index', 'show']]);
	}

	public function index(){

		$articles = Article::latest('published_at')->published()->get();
		return view('articles.index', compact('articles'));
	}

	public function show($id){

		$article = Article::findOrFail($id);
		return view('articles.show', compact('article'));
	}

	public function create(){

		return view('articles.create');
	}

	public function store(ArticleRequest $request){

		// マスアサインメントを使ってDBに保存
		Article::create($request->all());
		\Session::flash('flash_message', '記事を追加しました。');
		return redirect()->route('articles.index');
	}

	public function edit($id){
		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}

	public function update($id, ArticleRequest $request){
		$article = Article::findOrFail($id);
		$article->update($request->all());
		\Session::flash('flash_message', "記事を更新しました。");
		return redirect()->route('articles.show', [$article->id]);
	}

	public function destroy($id){
		$article = Article::findOrFail($id);
		$article->delete();
		\Session::flash('flash_message', '記事を削除しました。');
		return redirect()->route('articles.index');
	}
}
