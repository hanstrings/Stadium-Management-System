<?php

namespace App\Http\Controllers;
use App\Match;
use App\League;
use App\Team;
use DB;

use Illuminate\Http\Request;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches= Match::orderBy('dateandtime','asc')->paginate(3);
        $leagues = League::all();
        $teams = Team::all();
        $data['matches'] = $matches;
        $data['leagues'] = $leagues;
        $data['teams'] = $teams;
        return view('matches.index')->with(['matches' => $matches])->with('teams',$teams);
       /*  
        $leagues= League::all();
        $teams=Team::all();
        return view ('matches.index')->with('matches',$matches)->with('leagues', $leagues)->with('teams',$teams); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $match= Match::find($id);
        return view ('matches.show')->with('match',$match); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
