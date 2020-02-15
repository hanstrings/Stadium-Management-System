@extends('layouts.app')

@section('content')


<h1>TRANSACTION SUCCESSFULLY APPROVED.</h1>

<div class='well'>
    <form method="POST" action="{{ route('tickets.confirmticket') }}">
        @csrf
      {{-- {!! Form::open(['action' => ['TicketsController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
    <div class="form-group">
        <h2>Match number: </h2>
        <input class="class-name" readonly="readonly" name="match_id" type="text" value={{$match_id}}>
        <h2>Tickets Quantity </h2>
        <input class="class-name" readonly="readonly" name="quantity" type="text" value={{$quantity}}>
        <h2><strong>Section Info</strong>  </h2>
        <h3>Section Number</h3>
        <input class="class-name" readonly="readonly" name="sec_id" type="text" value='{{$sec_id}}'>
        <h1>Total Price : $ {{$amount}}</h1>
        <input class="class-name" readonly="readonly" name="total_price" type="text" value='${{$amount}}'>


    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Finish the Process here.') }}
            </button>
        </div>
    </div>
    </form>
    
    {{-- {{Form::hidden('_method','PUT')}}
    {{Form::submit('Proceed', ['class'=>'btn btn-primary'])}} 
{!! Form::close() !!} --}}
</div>
@endsection
