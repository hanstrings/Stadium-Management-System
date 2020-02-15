@extends('layouts.app')
@section('content')

    <h1>Teams Playing in  <strong>{{$LName}}</strong></h1>
    @if (count ($teams)>0)
        @foreach ($teams as $team)
            <div class="well ">
                <div class="card" style="width: 25rem;">
                    <a href="/teams/{{$team->id}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $team->image) }}" alt="image avatar"></a>
                    <div class="card-body">
                        <a href="/teams/{{$team->id}}"><h5 class="card-title"><strong>{{$team->TName}}</strong></h5></a>
                        <p class="card-text"><strong>Country : {{$team->country}}</strong></p>
                        <h4>Rating in UEFA : {{$team->ratings}}</h4>
                        <a href="/teams_leagues/{{$team->id}}"><button type="button" class="btn btn-primary btn-lg">Leagues</button></a>
                        <a href="/teams_matches/{{$team->id}}"><button type="button" class="btn btn-primary btn-lg">Matches</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No Teams Found.</p>
    @endif
@endsection