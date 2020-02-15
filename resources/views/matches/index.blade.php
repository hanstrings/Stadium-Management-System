@extends('layouts.app')
@section('content')
    <div class="row" style="margin:45px;">
    <div class="col-md-12">
    <h1>Matches</h1>
    @if (count ($matches)>0)
        @foreach ($matches as $match)
            <div class="well" style="float: left;">
                <h1>Match id : <strong>{{$match->id}}</strong></h1>
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                @foreach ($teams as $team)
                    @if ($team->id==$match->team_1)
                    
                    <div class="col s12 m7" >
                            
                            <a href="/teams/{{$team->id}}">
                                <br>
                            <h2 class="header">{{$team->TName}}</h2>
                            <div class="card horizontal"  style="width: 9rem;"  >
                                <div class="card-image" id="match_adjust">
                                    <img class="card-img-top" src="{{ URL::asset('storage/'. $team->image) }}" alt="image avatar">
                                </div>
                                <br>
                            </div></a>
                        </div>
                        <h3><strong>VS</strong>  </h3>
                        
                    @else
                        @if ($team->id==$match->team_2)
                        <div class="col s12 m7" >
                            
                            <a href="/teams/{{$team->id}}">
                                <br>
                            <h2 class="header">{{$team->TName}}</h2>
                            <div class="card horizontal"  style="width: 9rem;"  >
                                <div class="card-image" id="match_adjust">
                                    <img class="card-img-top" src="{{ URL::asset('storage/'. $team->image) }}" alt="image avatar">
                                </div>
                                
                            </div></a>
                        </div>
                            
                        @else
                            
                        @endif
                    @endif
                @endforeach
                </div>
                </div>
                </div>
                <br>
                <br>
                <br>
                <br>
            <h2>League : <a href="/leagues/{{$match->league['id']}}">{{$match->league['LName']}}</a> </h2>
            <h3>Date and time : {{$match->dateandtime}}</h3>
            @if (!Auth::guest())
            <a href={{ route('buy.ticket', ['id' => $match->id]) }}><button type="button" class="btn btn-primary btn-lg">Buy Tickets</button></a>
            @else
            <a href="/login"><button type="button" class="btn btn-primary btn-lg">First Login to Buy Tickets</button></a>
            @endif
            </div>
        @endforeach        
        <div class ="row">
            <div class="col-md-12">
                {{$matches->links()}}
            </div>
        </div>
    @else
        <p>No Match Found.</p>
    @endif
    </div>
    </div>
@endsection