<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Illuminate\Support\Facades\Validator;

use DiDom\Document;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    /**
     * 
     *
     * 
     */
    public function index()
    {
        return view('home',['menu' => 'home']);
    }
	public function pogoda()
    {
		$client = new Client();
        $req = $client->get('https://sinoptik.ua/%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0-%D0%B7%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%8C%D0%B5');
        $response = $req->getBody()->getContents();
		
		$document = new Document($response);
		
		$elm = $document->find('#bd1 .day-link');
		foreach($elm as $e) { $pogoda['day'] = $e->text(); }
		
		$elm = $document->find('#bd1 .date');
		foreach($elm as $e) { $pogoda['date'] = $e->text(); }
		
		$elm = $document->find('#bd1 .month');
		foreach($elm as $e) { $pogoda['month'] = $e->text(); }
		
		$elm = $document->find('.infoDaylight');
		foreach($elm as $e) { $pogoda['daylight'] = $e->text(); }
		
		$elm = $document->find('.today-temp');
		foreach($elm as $e) { $pogoda['temp'] = $e->text(); }
		
		$elm = $document->find('.gray.time');
		foreach($elm as $e) { $pogoda['timers'] = $e->text(); }
		
		$elm = $document->find('.temperature');
		foreach($elm as $e) { $pogoda['temperature'] = $e->text(); }
		
		$weather = $document->find('.weatherDetails td');
		$pogoda['weather'] = [];
		
		$pogoda['menu'] = 'pogoda';

		foreach($weather as $w) {
			array_push($pogoda['weather'], $w->text() );
		}
        return view('pogoda',$pogoda);
    }
	public function feedback()
    {
		$feed = Feedback::orderBy('created_at','desc')->limit(3)->get();
        return view('feedback',['feed'=>$feed,'menu'=>'feedback']);
    }
	public function addfeed(Request $request)
    {
		$arr['name'] = $request->name;
		$arr['email'] = $request->email;
		$arr['message'] = $request->message;
		Feedback::create($arr);
		
        return redirect()->route('feedback');
    }
}
