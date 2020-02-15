@extends('layouts.app')
@section('content')

    <a href="/leagues" class="btn btn-default">Go Back</a>
    

    <div class="well">
        <div class="card" style="width: 18rem;">
            <a href="/leagues/{{$league->id}}"><img class="card-img-top" src="{{ URL::asset('storage/'. $league->image) }}" alt="image avatar"></a>
            
        </div>
        <h1><strong>{{$league->LName}}</strong></h1>
    </div>
    <div class="well">
        <h1>Country </h1>
        <h3><strong>{{$league->country}}</strong></h3>
    </div>
    <div class="well">
        <h1>Description</h1>
        <p>{{$league->desc}}</p>
    </div>
    <div class="well">
        <h1>Database Record</h1>
        <small>added into database on {{$league->created_at}}</small>
    </div>
    
@endsection