@extends('layouts.app')
@section('content')

    {{-- <a href="/teams" class="btn btn-default">Go Back</a> --}}
    <div class="well">
            <div class="card" style="width: 25rem;">
                <a href="/players/{{$player->id}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $player->image) }}" alt="image avatar"></a>
            </div>
            <h1><strong>{{$player->PName}}</strong></h1>
            <h2><strong>Player Number: {{$player->PNo}}</strong></h2>
        </div>
        <div class="well">
            <h3>Team : <a href="/teams/{{$player->team['id']}}">{{$player->team['TName']}}</a> </h3>
            <div class="card" style="width: 18rem;">
            <a href="/teams/{{$player->team['id']}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $player->team['image']) }}" alt="image avatar"></a>
            </div>
            </div>
    <div class="well">
        <h1>Nationality</h1>
        <h3><strong>{{$player->nationality}}</strong></h3>
    </div>
    <div class="well">
        <h1>Ratings</h1>
        <p><strong>{{$player->ratings}}</strong></p>
    </div>
    <div class="well">
        <h1>Database Record</h1>
        <small>added into database on {{$player->created_at}}</small>
    </div>
    
@endsection