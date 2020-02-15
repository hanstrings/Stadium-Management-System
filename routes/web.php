<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','PagesController@home');
Route::get('/home','PagesController@home');
Route::get('/contact','PagesController@contact');
Route::get('/news','PagesController@news');
//Auth::routes();
Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');
Auth::routes(['verify' => true]);
Route::resource('leagues','LeaguesController');
Route::resource('teams','TeamsController');
Route::resource('matches','MatchesController');
Route::resource('news','NewsController');
Route::resource('profile','ProfileController');
Route::resource('pp','PPController');
Route::resource('feedback','FeedbackController');
Route::resource('players','PlayersController');
Route::resource('fav_team','FavTeamController');
Route::resource('fav_player','FavPlayerController');

Route::resource('leagues_teams','LeagueTeamController');

Route::resource('teams_leagues','TeamLeagueController');

Route::resource('leagues_matches','LeagueMatchController');

Route::resource('teams_matches','TeamMatchController');

Route::resource('team_players','TeamPlayersController');

//Route::get('/buy', 'PagesController@buy');
Route::get('buy/{id}', ['as' => 'buy.ticket', 'uses' => 'PagesController@buy']);

Route::get('cancelticket/{id}', ['as' => 'cancel.ticket', 'uses' => 'PagesController@cancelticket']);


Route::post('ticketprocess', ['as' => 'ticket.process', 'uses' => 'PagesController@processTicket']);

Route::get('authorize_net', ['as' => 'auth.nett', 'uses' => 'AuthorizeController@chargerCreditCard']);

Route::post('authorize_net', ['as' => 'auth.nett', 'uses' => 'AuthorizeController@chargerCreditCard']);

Route::get('fav_player', ['as' => 'fav.player', 'uses' => 'PagesController@showfavplayer']);

Route::get('fav_team', ['as' => 'fav.team', 'uses' => 'PagesController@showfavteam']);

Route::get('tickets_info', ['as' => 'ticket.booking', 'uses' => 'PagesController@viewtickets']);

Route::post('confirmticket', ['as' => 'tickets.confirmticket', 'uses' => 'PagesController@confirmTicket']);

Route::post('paymentInfo', ['as' => 'payment.info', 'uses' => 'PagesController@paymentInfo']);


Route::get('/checkout', 'checkoutController@index')->name('checkout.index');




Route::get('/dashboardd', 'DashboarddController@index')->name('dashboardd');


Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
