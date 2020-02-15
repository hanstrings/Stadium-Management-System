@extends('layouts.app')
@section('content')

    <h1>Matches</h1>
    @if (count ($matches)>0)
        @foreach ($matches as $match)
            <div class="well" style="float: left;">
                <h1>Match id : <strong>{{$match->id}}</strong></h1>
                @foreach ($teams as $team)
                @if ($team->id==$match->team_1)
                    
                <div  >
                        
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
                        
                    @endif
                @endif
                @endforeach
                <div style ="margin-top: 10px;">
                    <h4>Date and time : {{$match->dateandtime}}</h4>
                <h4>League : <a href="/leagues/{{$match->league['id']}}">{{$match->league['LName']}}</a> </h4>
                @if (!Auth::guest())
                <a href={{ route('buy.ticket', ['id' => $match->id]) }}><button type="button" class="btn btn-primary btn-lg">Buy Tickets</button></a>
                @else
                <a href="/login"><button type="button" class="btn btn-primary btn-lg">First Login to Buy Tickets</button></a>
                @endif
                </div>
            </div>
        @endforeach
    @else
        <p>No Matches Found.</p>
    @endif
@endsection