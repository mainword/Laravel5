<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
//use Illuminate\Cache;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class TestController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//return "Hey, Laravel is good!";
		return view('test');
	}
	
		
	public function setcache(){
		echo 'Test1';
		$minutes = Carbon::now()->addMinutes(10);
		
		//Cache::put('key', 'value', $minutes);
		$a = ($this->app['cache']);
		$a::put('key', 'value', $minutes);
		return "true";
	}
	
	public function setlog(){
		
		Log::info('This is some useful information.');
		Log::warning('Something could be going wrong.');
		Log::error('Something is really going wrong.');
		return "Good";
	}
	
	public function sethash(){
		$pw = "abcdefghijklmnop";
		
		//$result = Hash::make($pw);
		$result = "\$2y\$10\$QA9GjlBtgX46U7ZGx4Q4iOCdKDDQEr323wncHLO9M2pRv/453usW6";
		
		if( Hash::check($pw, $result) ){
			echo "The same!";
		}
		echo var_dump( $result );
	}
	
	
	public function setschedule(){
		

		
		
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
		//
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

}
