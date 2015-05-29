<?php namespace App\Http\Controllers;

use App\article;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use Request;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
    {
        $this->middleware('auth',['except' => ['view','viewArticle','show']]);
    }
	public function index()
	{
		$articles=article::all();
        return view('dashboard',compact('articles'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('AddArticle');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$destinationPath = public_path('images');
		$fileName = str_random(20) . '.' . Request::file('img')->getClientOriginalExtension();
		
		$articles = new article;
		$articles->title = Request::get('title');
		$articles->category = Request::get('category');
		$articles->content = Request::get('content');
		$articles->img = $fileName;
		$articles->save();
		Request::file('img')->move($destinationPath, $fileName);
		return redirect('dashboard');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$articles=article::all();
        return view('article',compact('articles'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		article::find($id)->delete();
   return redirect('dashboard');
	}
	public function view()
	{
		$articles=article::all()->take(4);
        return view('awal',compact('articles'));
		
	}
	public function viewArticle($id) {
		$articles=article::find($id);
        return view('viewpost',compact('articles'));
	}

	

}
