
@extends('layouts.app')
@section('content')
<div class='d-block p-2'>

    <h2>Tickets booked by <strong>{{Auth::user()->name}}</strong></h2>
    @if (count ($tickets)>0)
        @foreach ($tickets as $ticket)
            <div class="well" style="float: left;">
                <h1>Ticket id : <strong>{{$ticket->id}}</strong></h1>
                <h1>Match id : <strong>{{$ticket->match_id}}</strong></h1>
                <h1>Section id : <strong>{{$ticket->section_id}}</strong></h1>
                <h1>Section Type : <strong>{{$ticket->section['sec_name']}}</strong></h1>
                <h1><strong> Match info:</strong></h1>
                @foreach ($teams as $team)
                @if ($team->id==$ticket->match['team_1'])
                    
                <div >
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
                    @if ($team->id==$ticket->match['team_2'])
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
                    <div style ="margin-top: 10px;">
                        <h3>Date and time : <strong>{{$ticket->match['dateandtime']}}</strong></h3>
                    </div>
                    @endif
                @endif
                @endforeach
                <a onclick="return confirm('Are you sure You want to delete your booking?')"  href={{ route('cancel.ticket', ['id' => $ticket->id]) }}><button type="button" class="btn btn-danger btn-lg">Cancel Ticket</button></a>
            </div>
        @endforeach
    @else
        <p>No Tickets Found.</p>
    @endif

    
</div>
@endsection