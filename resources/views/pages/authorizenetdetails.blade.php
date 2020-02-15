@extends('layouts.app')

@section('content')



<h1>Authorize Payment Form</h1>

<form method="POST" action="{{route ('auth.nett')}}">
{{-- <form method="POST" action="{{ route('payment.info') }}"> --}}

    {{ csrf_field() }}
<h3>Credit Card Information</h3>
    <div class="form-group">
            <h2>Choose Appropriate Card Number</h2>
            <select name="cnumber" class="col-md-6">
                <option value="select">Select your card</option>
                <option value="37000000000000">American Express - 37000000000000</option>
                <option value="6011000000000012">Discover -	6011000000000012</option>
                <option value="3088000000000017">JCB	- 3088000000000017</option>
                <option value="4007000000027">Visa - 4007000000027</option>
                <option value="4111111111111111">Visa - 4111111111111111</option>
                <option value="4012888818888">Visa - 4012888818888</option>
                <option value="5424000000000015">Master Card - 5424000000000015</option>
                <option value="2223000010309703">Master Card - 2223000010309703</option>
                <option value="2223000010309711">Master Card - 2223000010309711</option>
            </select>
        
    </div>
    <br>
    <div class="form-group">
        <label for="card-expiry-month">Expiration Month</label>
        {{ Form::selectMonth(null, null, ['name' => 'card_expiry_month', 'class' => 'form-control', 'required']) }}
    </div>
    <div class="form-group">
        <label for="card-expiry-year">Expiration Year</label>
        {{ Form::selectYear(null, date('Y')+1, date('Y') + 10, null, ['name' => 'card_expiry_year', 'class' => 'form-control', 'required']) }}
    </div>
    {{-- <div class="form-group">
        <label for="ccode">Card Code</label>
        <input type="text" class="form-control" id="ccode" name="ccode" placeholder="Enter Card Code">
    </div> --}}
    <div class="form-group">
        <h2>Match number: </h2>
        <input class="class-name" readonly="readonly" name="match_id" type="text" value={{$match_id}}>
        <h2>Tickets Quantity </h2>
        <input class="class-name" readonly="readonly" name="quantity" type="text" value={{$quan}}>
        <h2><strong>Section Info </strong> </h2>
        <h3>Secton type</h3>
        <input class="class-name" readonly="readonly" name="sec_name" type="text" value='{{$sec->sec_name}}'>
        <h3>Section Price</h3>
        <input class="class-name" readonly="readonly" name="sec_price" type="text" value='${{$sec->price}}'>
        <h3>Section Number</h3>
        <input class="class-name" readonly="readonly" name="sec_id" type="text" value='{{$sec->id}}'>
        <h1>Total Price : $ {{$total_price}}</h1>
        <input class="class-name" readonly="readonly" name="total_price" type="text" value={{$total_price}}>


    </div>
    
        <button type="submit" class="btn btn-primary">Make Payment</button>
</form>

@endsection