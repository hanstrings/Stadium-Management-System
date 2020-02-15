<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Section;
use App\team;
use App\Match;
use App\Player;
use App\User;
use Carbon\Carbon;
use App\Ticket;
use Auth;
use Session;

class PagesController extends Controller
{
    public function home() {
		//$news= News::orderBy('headline','asc')->paginate(10);
		$news=News::orderBy('dateandtime','desc')->take(4)->get();
        return view ('pages.home')->with('news',$news);
	}
	public function contact() {
    	return view('pages.contact');
	}
	public function news() {
    	return view('pages.news');
	}

	public function showfavteam(){
		if (Auth::user()->team_id=='') {
            $teams= Team::all();
            return view('pages.selectfavteam')->with('teams',$teams);
        } 
        else {
            $players=Team::find(Auth::user()->team['id'])->players;
            $teams= Team::all();
            $matches=Team::find(Auth::user()->team['id'])->matches;
            return view('pages.selectfavteam')->with('teams',$teams)->with('matches',$matches)->with('players',$players);
        }
	}

	public function showfavplayer(){
		if (Auth::user()->player_id=='') {
            $players= Player::all();
            return view('pages.selectfavplayer')->with('players',$players);
        } 
        else {
			$players=Player::all();
			$teamOfPlayer = Player::find(Auth::user()->player['id'])->team;
			$teams=Team::all();
			$matches=Team::find($teamOfPlayer->id)->matches;
            return view('pages.selectfavplayer')->with('players',$players)->with('teamOfPlayer',$teamOfPlayer)->with('teams',$teams)->with('matches',$matches);
        }
	}

	public function viewtickets(){

		$tickets = User::find(Auth::user()->id)->tickets;
		$teams=Team::all();
		
		return view('pages.viewtickets')->with('tickets',$tickets)->with('teams',$teams);
	}


	public function buy($match_id) {
		//$news= News::orderBy('headline','asc')->paginate(10);
		//$news=News::orderBy('dateandtime','desc')->take(4)->get();

		$sections=Section::all();
		$teams=Team::all();
		$match=Match::find($match_id);
        return view ('tickets.buyticket')->with('sections',$sections)->with('match',$match)->with('teams',$teams);
	}

	public function processTicket(Request $request){
		$sec=Section::find($request->input('section'));
		$sec_price=$sec->price;
		$quan=$request->input('quantity');
		$total_price=$request->input('quantity')*$sec_price;
		$match_id=$request->input('match_id');
		return view('tickets.confirmticket')->with('sec',$sec)->with('total_price',$total_price)->with('match_id',$match_id)->with('quan',$quan);
		
	}

	public function confirmTicket(Request $request){

		
		for ($i=0; $i < $request->input('quantity'); $i++) { 
			$ticket = new Ticket;
			$ticket->match_id = $request->input('match_id');
			$ticket->user_id = Auth::user()->id;
			$ticket->section_id = $request->input('sec_id');	
			$ticket->created_at= Carbon::now()->format('Y-m-d H:i:s');
			$ticket->save();
		}
		Session::flash('flash_message','Your ticket is successfully reserved.');
		return redirect('dashboardd');
	}

	public function paymentInfo(Request $request){
		$sec=Section::find($request->input('section'));
		$sec_price=$sec->price;
		$quan=$request->input('quantity');
		$total_price=$request->input('quantity')*$sec_price;
		$match_id=$request->input('match_id');
		return view('pages.authorizenetdetails')->with('sec',$sec)->with('total_price',$total_price)->with('match_id',$match_id)->with('quan',$quan);
	}

	public function cancelticket($ticket_id){
		Ticket::destroy($ticket_id);
		Session::flash('flash_danger','Your booking is canceled successfully.');
		return redirect('tickets_info');
	}

	
}