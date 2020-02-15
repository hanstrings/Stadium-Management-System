@extends('layouts.app')
@section('content')

    <a href="/matches" class="btn btn-default">Go Back</a>
    <h1>{{$match->team_1}} vs {{$match->team_2}} </a></h1>
    <h4>Date and time : {{$match->dateandtime}}</h4>
    <h4>League : {{$match->league_id}}</h4>
@endsection