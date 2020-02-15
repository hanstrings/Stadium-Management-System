@extends('layouts.app')
@section('content')
    <div class="row" style="margin:45px;">
        <div class="col-md-12">
            <h1>Leagues</h1>
            @if (count ($leagues)>0)
            <div class="row">
            <div class="col-md-12">
                <div class="row">
                @foreach ($leagues as $league)
                <div class="col-md-4 col-sm-12" style="margin-bottom:150px; margin-left:auto;">
                    <div class="well" style="float: left;">
                        <div class="card" style="width: 25rem; height: 23rem;">
                            <a href="/leagues/{{$league->id}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $league->image) }}" alt="image avatar"></a>
                            <div class="card-body">
                                <a href="/leagues/{{$league->id}}"><h5 class="card-title"><strong>{{$league->LName}}</strong></h5></a>
                                <p class="card-text"><strong>Country : {{$league->country}}</strong></p>
                                {{-- <a href="/leagues_teams/{{$league->id}}"><button type="button" class="btn btn-primary btn-lg">Teams</button></a> --}}
                                <a href="/leagues_matches/{{$league->id}}"><button type="button" class="btn btn-primary btn-lg">Matches</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
            </div>
                <div class ="row">
                    <div class="col-md-12">
                        {{$leagues->links()}}
                    </div>
                </div>
            @else
                <p>No Leagues Found.</p>
            @endif
        </div>
    </div>
@endsection