<?php namespace App\Http\Controllers;

use App\Embed;
use App\Category;
use App\Views;

use Request, Auth, DateTime, Input;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$embed = Embed::with('views')->orderBy('id', 'desc')->paginate(2);

		return view('welcome.index')->with('embed', $embed);
	}

	public function show($title)
	{
		$embedShow = Embed::where('title', '=', $title)->with('views')->first();
		if($embedShow == null){
			return redirect()->back();
		}
		$category = Category::where('id', '=', $embedShow->category_id)->with('embed')->first();
		$embed = Embed::where('category_id', '=', $embedShow->category_id)->with('views')->paginate(1);

		$views_details = Views::where('ip', '=', Request::header('x-client-ip'))
							->where('embed_id', '=', $embedShow->id)
								->orderBy('id', 'desc')
									->first();

		if($views_details == null){
			$views = new Views;
			// $views->user_id = Auth::user()->id;
			$views->embed_id = $embedShow->id;
			$views->ip = Request::header('x-client-ip');
			$views->details = json_encode(Request::header());
			$views->save();
		}
		else{
			$now = new DateTime();
			$then = new DateTime( $views_details->created_at ); // "2012-07-18 21:11:12" for example
			$diff = $now->diff($then);
			$minutes = ($diff->format('%a') * 1440) + // total days converted to minutes
			           ($diff->format('%h') * 60) +   // hours converted to minutes
			            $diff->format('%i');          // minutes
			if ($minutes >= 3) {
				$views = new Views;
				// $views->user_id = Auth::user()->id;
				$views->embed_id = $embedShow->id;
				$views->ip = Request::header('x-client-ip');
				$views->details = json_encode(Request::header());
				$views->save();
			}
		}
		


		return view('welcome.show')
			->with('embedShow', $embedShow)
				->with('category', $category)
					->with('embed', $embed);
	}

	public function category($title)
	{
		$category = Category::where('title', '=', $title)->with('embed')->first();
		$embed = Embed::where('category_id', '=', $category->id)->with('views')->orderBy('id', 'desc')->paginate(1);
		
		return view('welcome.category')
			->with('category', $category)
				->with('embed', $embed);
	}

	public function popular()
	{
		$embed = Embed::with('views')->orderBy('id', 'desc')->paginate(2);

		return view('welcome.popular')->with('embed', $embed);
	}

	public function search()
	{
		//$embed = Embed::with('views')->orderBy('id', 'desc')->get();
		$embed = Embed::with('views')->where('title','like','%'.Input::get('keyword').'%')
							        	->orderBy('title')
							        		->get();

		return view('welcome.search')
			->with('embed', $embed)
				->with('keyword', Input::get('keyword'));
	}
}
