<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class userController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 protected $user; 
    /**
     * The Guard implementation.
     *
     * @var Authenticator
     */
    protected $auth;


	public function index()
	{
		return view('login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	if (Auth::attempt(array('email' => Request::get('email'), 'password' => Request::get('password'))))
		{
   		return redirect('dashboard');
   		}
	else{
  		return redirect('login');
		}
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
		//
	}
	public function logout()
    {
   Auth::logout();
   return redirect('login');
    }


}
