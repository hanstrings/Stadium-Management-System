@extends('layouts.app')
@section('content')

    <h1>All Players</h1>
    @if (count ($players)>0)
        @foreach ($players as $player)
            <div class="well" id="teamsimages">
                <div class="card" style="width: 25rem;">
                    <a href="/players/{{$player->id}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $player->image) }}" alt="image avatar"></a>
                    <div class="card-body">
                        <a href="/players/{{$player->id}}"><h2 class="card-title"><strong>{{$player->PName}}</strong></h2></a>
                        <h3 class="card-text"><strong>Player Number : {{$player->PNo}}</strong></h3>
                        <h3><p class="card-text">Nationality : <strong>{{$player->nationality}}</strong></p></h3>
                        <h3>Team : <a href="/teams/{{$player->team['id']}}">{{$player->team['TName']}}</a> </h3>
                        <h3>Ratings by FIFA : <strong>{{$player->ratings}}</strong></h3>
                    </div>
                </div>
            </div>
        @endforeach
        <br>
        {{$players->links()}}
    @else
        <p>Currently no player in squad.</p>
    @endif
@endsection