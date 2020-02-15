

@extends('layouts.app')
@section('content')
<a href="/news" class="btn btn-default">Go Back</a>
    <h1>NEWS</h1>
    <div class="well" id=newsimages>
        <div class="well">
            <h3><a href="/news/{{$new->id}}">{{$new->headline}}</a></h3>
        </div>
        <div class="well">
            <a href="/news/{{$new->id}}"><img src="{{ URL::asset('storage/'. $new->image) }}" alt="image not loaded" ></a>
        </div>
        <div class="well">
            <h2>Description : {{$new->desc}}</h2>
            
        </div>
        <div class="well">
            <h4>Date : {{$new->dateandtime}}</h4>
            
        </div>
        
    </div>
@endsection