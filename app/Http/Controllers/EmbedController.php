<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\EmbedRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Embed;

use Auth;

class EmbedController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		return view('embed.index');
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
	public function store(EmbedRequest $request)
	{
		$embed = new Embed;
    	$embed->user_id = Auth::user()->id;
    	$embed->src = $request->get('src');
    	$embed->title = $request->get('title');
    	$embed->description = $request->get('description');
    	$embed->category_id = $request->get('category_id');
    	$embed->img = $request->get('img');
    	$embed->save();

        return redirect()->back();
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
		//dd($id);
		$embed = Embed::find($id);
		return view('embed.edit')->with('embed', $embed);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EmbedRequest $request,$id)
	{
		//
		$embed = Embed::find($id);
    	$embed->src = $request->get('src');
    	$embed->title = $request->get('title');
    	$embed->description = $request->get('description');
    	$embed->category_id = $request->get('category_id');
    	$embed->img = $request->get('img');
    	$embed->save();

        return redirect()->back();
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
