@extends('layouts.app')

@section('content')




<div class='well'>
    <form method="POST" action="{{ route('payment.info') }}">
        @csrf
      {{-- {!! Form::open(['action' => ['TicketsController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
    <div class="form-group">
        <h2>Match number: </h2>
        <input class="class-name" readonly="readonly" name="match_id" type="text" value={{$match_id}}>
        <h2>Tickets Quantity </h2>
        <input class="class-name" readonly="readonly" name="quantity" type="text" value={{$quan}}>
        <h2>Section Info </h2>
        <h3>Secton type</h3>
        <input class="class-name" readonly="readonly" name="sec_name" type="text" value='{{$sec->sec_name}}'>
        <h3>Section Price</h3>
        <input class="class-name" readonly="readonly" name="sec_price" type="text" value='${{$sec->price}}'>
        <h3>Section Number</h3>
        <input class="class-name" readonly="readonly" name="sec_id" type="text" value='{{$sec->id}}'>
        <h1>Total Price : $ {{$total_price}}</h1>
        <input class="class-name" readonly="readonly" name="total_price" type="text" value='${{$total_price}}'>


    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Proceed to make Payment') }}
            </button>
        </div>
    </div>
    </form>
    
    {{-- {{Form::hidden('_method','PUT')}}
    {{Form::submit('Proceed', ['class'=>'btn btn-primary'])}} 
{!! Form::close() !!} --}}
</div>
@endsection
