<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\League;
use DB;

class LeaguesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$leagues= League::orderBy('LName','asc')->take(1)->get();
        //$leagues= League::orderBy('LName','asc')->get();
        //$leagues= League::all();
        //$league = Post::where('title','Post Two'->get());
        //$leagues=DB::select('SELECT * from leagues');LIMIT 5;

        $leagues= League::orderBy('LName','asc')->paginate(6);
        return view ('leagues.index')->with('leagues',$leagues);
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
        $league= League::find($id);
        return view ('leagues.show')->with('league',$league); 
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
