@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Welcome to Your dashboard {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
                @if (!Auth::guest())
                <div class="btn-group btn-group-justified">
                    <a href={{ route('fav.team') }} class="btn btn-primary btn-lg">Your Favourite Team</a>
                    <a href={{ route('fav.player') }} class="btn btn-success btn-lg">Your Favourite Player</a>
                    <a href={{ route('ticket.booking') }} class="btn btn-warning btn-lg">Your Bookings</a>
                </div>
                
                @else
                @endif
            </div>
        </div>
    </div>
@endsection
