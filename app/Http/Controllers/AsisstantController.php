<?php namespace App\Http\Controllers;

use App\asisstant;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class AsisstantController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
    {
        $this->middleware('auth',['except' => ['view']]);
    }

	public function index()
	{
		$asisstants=asisstant::all();
        return view('listAsisstant',compact('asisstants'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('AddAsisstant');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$destinationPath = public_path('images');
		$fileName = str_random(20) . '.' . Request::file('foto')->getClientOriginalExtension();
		
		$asisstants = new asisstant;
		$asisstants->nim = Request::get('nim');
		$asisstants->nama = Request::get('nama');
		$asisstants->jurusan = Request::get('jurusan');
		$asisstants->angkatan = Request::get('angkatan');
		$asisstants->hp = Request::get('hp');
		$asisstants->email = Request::get('email');
		$asisstants->divisi = Request::get('divisi');
		$asisstants->deskripsi = Request::get('deskripsi');
		$asisstants->foto = $fileName;
		$asisstants->save();
		Request::file('foto')->move($destinationPath, $fileName);
		return redirect('listAsisstant');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		asisstant::find($id)->delete();
   return redirect('listAsisstant');
	}
	public function view()
	{
		$asisstants=asisstant::all();
        return view('assistant',compact('asisstants'));
	}

}
