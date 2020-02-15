@extends('layouts.app')
@section('content')

    <h1><strong>{{$TName}}</strong> is playing in </h1>
    @if (count ($leagues)>0)
        @foreach ($leagues as $league)
        <div class="well">
                <div class="card" style="width: 25rem;">
                    <a href="/leagues/{{$league->id}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $league->image) }}" alt="image avatar"></a>
                    <div class="card-body">
                        <a href="/leagues/{{$league->id}}"><h5 class="card-title"><strong>{{$league->LName}}</strong></h5></a>
                        <p class="card-text"><strong>Country : {{$league->country}}</strong></p>
                        <!-- <a href="/leagues_teams/{{$league->id}}"><button type="button" class="btn btn-primary btn-lg">Teams</button></a> -->
                        <a href="/leagues_matches/{{$league->id}}"><button type="button" class="btn btn-primary btn-lg">Matches</button></a>
                    </div>
                </div>
            </div>
        @endforeach
        
    @else
        <p>No Leagues Found.</p>
    @endif
@endsection

