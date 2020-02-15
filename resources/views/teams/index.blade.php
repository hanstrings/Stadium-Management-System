@extends('layouts.app')
@section('content')
<div class="row" style="margin:45px;">
    <div class="col-md-12">
        <h1>Teams</h1>
        @if (count ($teams)>0)
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-md-4 col-sm-12" style="margin-bottom:150px; margin-left:auto;">
                            <div class="well" id="teamsimages">
                                <div class="card" style="width: 30rem; height: 35rem;">
                                    <a href="/teams/{{$team->id}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $team->image) }}"
                                            alt="image avatar"></a>
                                    <div class="card-body">
                                        <a href="/teams/{{$team->id}}">
                                            <h5 class="card-title"><strong>{{$team->TName}}</strong></h5>
                                        </a>
                                        <p class="card-text"><strong>Country : {{$team->country}}</strong></p>
                                        <h4>Rating in UEFA : {{$team->ratings}}</h4>
                                        <a href="/teams_leagues/{{$team->id}}"><button type="button" class="btn btn-primary btn-lg">Leagues</button></a>
                                        <a href="/teams_matches/{{$team->id}}"><button type="button" class="btn btn-primary btn-lg">Matches</button></a>
                                        <a href="/team_players/{{$team->id}}"><button type="button" class="btn btn-primary btn-lg">Players</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- <div style="float:clear; margin-top:120px;"></div> -->
        <div class="row">
            <div class="col-md-12">
                {{$teams->links()}}
            </div>
        </div>
        @else
        <p>No Teams Found.</p>
        @endif
    </div>
</div>
@endsection
