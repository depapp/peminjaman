<?php namespace App\Http\Controllers;

use App\loan;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class LoanController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function __construct()
    {
        $this->middleware('auth',['except' => ['create', 'store']]);
    }
	public function index()
	{
		$loans=loan::all();
        return view('loan',compact('loans'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('formLoan');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$loans = new loan;
		$loans->nama = Request::get('nama');
		$loans->nim = Request::get('nim');
		$loans->jurusan = Request::get('jurusan');
		$loans->fakultas = Request::get('fakultas');
		$loans->institusi = Request::get('institusi');
		$loans->tlp = Request::get('tlp');
		$loans->keperluan = Request::get('keperluan');
		$loans->tgl_pinjam = Request::get('tgl_pinjam');
		$loans->tgl_kembali = Request::get('tgl_kembali');
		$loans->alat = Request::get('alat');
		$loans->status = 'waiting';
		$loans->save();
		return redirect('formLoan');



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
		$loans = loan::find($id);
		$loans->status = 'Accept';
		$loans->save();
		return redirect('loan'); 
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		loan::find($id)->delete();
   		return redirect('loan');
	}

}
