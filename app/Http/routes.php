<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('search/{keyword}', function ($keyword) {

//    $client = new \Guzzle\Service\Client('https://api.twitter.com/1.1');
//    $auth = new \Guzzle\Plugin\Oauth\OauthPlugin([
//        'consumer_key'    =>  'ccgJ1GSUGoQCskNrAeWL3f30H',
//        'consumer_secret' =>  'B24czKeyaeO4wOty40GZPOKoRdQaaGmQEfLnROBVuP55i4dEcY',
//        'token'           =>  '89675501-etL4tt003ApP7qLLcY29QnzrYSBlPt7XpgzmAVgVf',
//        'token_secret'    =>  'bEjXgUSq5uSlbi0riZWQmPrGMmEw4fqFYaCef27eAUyaB'
//    ]);
//    $client->addSubscriber($auth);
//    $response = $client->get('search/tweets.json?q='.$keyword)->send();
//    $tweets=array_fetch($response->json()['statuses'],'text');
//    dd($tweets);
    $result=Twitter::search($keyword);
    //dd(array_fetch($result['statuses'],'text'));//TwitterAPI::search($keyword);
    return view('search')->with('result',array_fetch($result['statuses'],'text'));
});