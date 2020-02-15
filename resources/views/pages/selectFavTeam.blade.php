@extends('layouts.app')
@section('content')

@if (Auth::user()->team_id == '')
    <div class='well'>
            {!! Form::open(['action' => ['FavTeamController@update', Auth::user()->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group {{ $errors->has('fav_team') ? ' has-error' : '' }}">
                <h2>Choose Your Favourite Team</h2>
                    <select name="fav_team" class="col-md-6">
                        @if($teams->count() > 0)
                            @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->id}} - {{$team->TName}}</option>
                            
                            @endForeach
                        @else
                        No Teams Found
                        @endif   
                    </select>
                </div>
                <br>
                <br>
                <br>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Select', ['class'=>'btn btn-primary'])}} 
        {!! Form::close() !!}
        <a href={{ route('fav.player') }} class="btn btn-primary btn-lg" style="float:right;">Your Favourite Player</a>
        <a href={{ route('ticket.booking') }} class="btn btn-warning btn-lg" style="float:right;">Your Bookings</a>
                
    </div>
        
    @else
    <div class='well'>
    {!! Form::open(['action' => ['FavTeamController@update', Auth::user()->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group {{ $errors->has('fav_team') ? ' has-error' : '' }}">
        <h2>Change Your Favourite Team</h2>
            <select name="fav_team" class="col-md-6">
                @if($teams->count() > 0)
                    @foreach($teams as $team)
                    <option value="{{$team->id}}"> {{$team->id}} - {{$team->TName}}</option>
                    @endForeach
                @else
                No Teams Found
                @endif   
            </select>
        </div>
        <br>
        <br>
        <br>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Select', ['class'=>'btn btn-primary'])}} 
    {!! Form::close() !!}

    
</div>


<a href={{ route('ticket.booking') }} class="btn btn-warning btn-lg">Your Bookings</a>
<a href={{ route('fav.player') }} class="btn btn-primary btn-lg">Your Favourite Player</a>
<h1><strong>Favourite Team Section</strong></h1>
    

<h2>Your Favourite Team : <a href="/teams/{{Auth::user()->team['id']}}">{{Auth::user()->team['TName']}}</a> </h2>
<div class="card" style="width: 40rem;">
    <a href="/teams/{{Auth::user()->team['id']}}"><img class="card-img-top" src="{{ URL::asset('storage/'. Auth::user()->team['image']) }}" alt="image avatar"></a>
    <div class="card-body">
        <a href="/teams/{{Auth::user()->team['id']}}"><h2 class="card-title"><strong>{{Auth::user()->team['TName']}}</strong></h2></a>
        
    </div>
</div>
{{-- <a href="/teams_leagues/{{Auth::user()->team['id']}}"><button type="button" class="btn btn-primary btn-lg">Leagues</button></a>
<a href="/teams_matches/{{Auth::user()->team['id']}}"><button type="button" class="btn btn-primary btn-lg">Matches</button></a>
<a href="/team_players/{{Auth::user()->team['id']}}"><button type="button" class="btn btn-primary btn-lg">Players</button></a> --}}
<div class="d-block p-2">
<h1>{{Auth::user()->team['TName']}}'s Squad</h1>
    @if (count ($players)>0)
        @foreach ($players as $player)
            <div class="well" id="teamsimages">
                <div class="card" style="width: 25rem;">
                    <a href="/players/{{$player->id}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $player->image) }}" alt="image avatar"></a>
                    <div class="card-body">
                        <a href="/players/{{$player->id}}"><h2 class="card-title"><strong>{{$player->PName}}</strong></h2></a>
                        <h3 class="card-text"><strong>Player Number : {{$player->PNo}}</strong></h3>
                        <h3><p class="card-text">Nationality : <strong>{{$player->nationality}}</strong></p></h3>
                        <h3>Ratings by FIFA : <strong>{{$player->ratings}}</strong></h3>
                    </div>
                </div>
            </div>
        @endforeach
        <br>
        {{-- {{$players->links()}} --}}
    @else
        <p>Currently no player in squad.</p>
    @endif
</div>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='d-block p-2'>

    <h2>Upcoming Fixtures of {{Auth::user()->team['TName']}}</h2>
<h1><strong>Matches</strong> </h1>
    @if (count ($matches)>0)
        @foreach ($matches as $match)
            <div class="well" style="float: left;">
                <h1>Match id : <strong>{{$match->id}}</strong></h1>
                @foreach ($teams as $team)
                @if ($team->id==$match->team_1)
                    
                <div >
                        <a href="/teams/{{$team->id}}">
                            <br>
                        <h2 class="header">{{$team->TName}}</h2>
                        <div class="card horizontal"  style="width: 9rem;"  >
                            <div class="card-image" id="match_adjust">
                                <img class="card-img-top" src="{{ URL::asset('storage/'. $team->image) }}" alt="image avatar">
                            </div>
                            <br>
                        </div></a>
                    </div>
                    <h3><strong>VS</strong>  </h3>
                    
                @else
                    @if ($team->id==$match->team_2)
                    <div class="col s12 m7" >
                        
                        <a href="/teams/{{$team->id}}">
                            <br>
                        <h2 class="header">{{$team->TName}}</h2>
                        <div class="card horizontal"  style="width: 9rem;"  >
                            <div class="card-image" id="match_adjust">
                                <img class="card-img-top" src="{{ URL::asset('storage/'. $team->image) }}" alt="image avatar">
                            </div>
                            
                        </div></a>
                    </div>
                        
                    @endif
                @endif
                @endforeach
                <div style ="margin-top: 10px;">
                    <h4>Date and time : {{$match->dateandtime}}</h4>
                <h4>League : <a href="/leagues/{{$match->league['id']}}">{{$match->league['LName']}}</a> </h4>
                @if (!Auth::guest())
                <a href={{ route('buy.ticket', ['id' => $match->id]) }}><button type="button" class="btn btn-primary btn-lg">Buy Tickets</button></a>
                @else
                <a href="/login"><button type="button" class="btn btn-primary btn-lg">First Login to Buy Tickets</button></a>
                @endif
                </div>
            </div>
        @endforeach
    @else
        <p>No Matches Found.</p>
    @endif

    
</div>


    @endif
    <br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a href="/teams_leagues/{{Auth::user()->team['id']}}"><button type="button" class="btn btn-primary btn-lg">Leagues in which <strong>{{Auth::user()->team['TName']}} play.</strong></button></a>
    @endsection