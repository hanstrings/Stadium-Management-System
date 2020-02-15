@extends('layouts.app')
@section('content')
    <h1>NEWS</h1>
    @if (count ($news)>0)
        @foreach ($news as $new)
            <div class="well" id=newsimages>
                <h3><a href="/news/{{$new->id}}">{{$new->headline}}</a></h3>
				<a href="/news/{{$new->id}}"><img src="{{ URL::asset('storage/'. $new->image) }}" alt="image not loaded" ></a>
                <h2>Description : {{$new->desc}}</h2>
				<h4>Date : {{$new->dateandtime}}</h4>
            </div>
        @endforeach
        
        {{$news->links()}}
    @else
        <p>No News Found.</p>
    @endif
@endsection