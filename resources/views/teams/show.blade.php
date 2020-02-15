@extends('layouts.app')
@section('content')

    <a href="/teams" class="btn btn-default">Go Back</a>
    <div class="well">
            <div class="card" style="width: 18rem;">
                <a href="/teams/{{$team->id}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $team->image) }}" alt="image avatar"></a>
                
            </div>
            <h1><strong>{{$team->TName}}</strong></h1>
        </div>
    <div class="well">
        <h1>Country </h1>
        <h3><strong>{{$team->country}}</strong></h3>
    </div>
    <div class="well">
        <h1>Description</h1>
        <p>{{$team->desc}}</p>
    </div>
    <div class="well">
        <h1>Ratings</h1>
        <p><strong>{{$team->ratings}}</strong></p>
    </div>
    <div class="well">
        <h1>Database Record</h1>
        <small>added into database on {{$team->created_at}}</small>
    </div>
    
@endsection