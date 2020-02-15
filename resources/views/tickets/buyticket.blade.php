@extends('layouts.app')

@section('content')

<div class="well" >
        <h1>Match id : <strong>{{$match->id}}</strong></h1>
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
        <br>
        <br>
        <br>
        <br>
    <h2>League : <a href="/leagues/{{$match->league['id']}}">{{$match->league['LName']}}</a> </h2>
    <h3>Date and time : {{$match->dateandtime}}</h3>
    </div>


<div class='well'>
    <form method="POST" action="{{ route('payment.info') }}">
        @csrf
    {{-- {!! Form::open(['action' => ['TicketsController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
    <div class="form-group {{ $errors->has('section') ? ' has-error' : '' }}">
        <h2>Choose Your Seat Type</h2>
            <select name="section" class="col-md-6">
                @if($sections->count() > 0)
                    @foreach($sections as $section)
                    <option value="{{$section->id}}">{{$section->sec_name}} - ${{$section->price}}</option>
                    @endForeach
                @else
                No Sections Found
                @endif   
            </select>
            <br>
            <h2>Choose no of seats :</h2>
            <select name="quantity" class="col-md-6">
                    @for ($i = 1; $i < 5; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
            </select>
            <br>
            <h2>Match number: </h2>
            <select name="match_id" class="col-md-6">
                    <option value="{{$match->id}}">{{$match->id}}</option>
            </select>
        </div>
        <br>
        <br>
        <br>
        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Proceed to payment') }}
                                </button>
                            </div>
                        </div>
    </form>
    {{-- {{Form::hidden('_method','PUT')}}
    {{Form::submit('Proceed', ['class'=>'btn btn-primary'])}} 
{!! Form::close() !!} --}}
</div>
@endsection
