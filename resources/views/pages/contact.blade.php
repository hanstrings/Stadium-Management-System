@extends('layouts.app')
@section('content')
	
<div class="container">
    <div class="contact">
    <div class="col-md-6 send-contact">
    <h4>Send us Your Feedback</h4>
    @if (count($errors)>0)
        <div class="row">
            <div class="col-md-4 col-md-offset-4"></div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>
    @else
        
    @endif
    {!! Form::open(['action' => ['FeedbackController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="grid-contact">
            <div class="col-md-6 contact-left">
                <p class="your-para"> Name</p>
                @if (Auth::guest())
                    <input type="text" name="name" value="{{ Request::old('name') }}" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                @else
                    <input type="text" name="name" value={{ Auth::user()->name }} onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">

                @endif
            </div>
            <div class="col-md-6 contact-left">
                <p class="your-para"> Email address</p>
                @if (Auth::guest())
                <input type="text"  name="email" value="{{ Request::old('email') }}"  onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                @else
                    <input type="text" name="email" value={{ Auth::user()->email }} onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">

                @endif
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="subject">
            <p class="message-para"> Subject</p>
            <input type="text" name="subject" value="{{ Request::old('subject') }}" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
        </div>
            <p class="message-para">FEEDBACK</p>
            <textarea cols="77" name="message" rows="6" value="{{ Request::old( 'message') }}" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
            <div class="send">
                <input type="submit"  value="SUBMIT" >
            </div>
            <div class="clearfix"> </div>
    </form>
 </div>
 <div class="col-md-6 send-contact">
    <h4>Get in touch</h4>
    <div class="map">
        <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=24.8667795,67.0311286&amp;q=Karachi%20%2C%20Sindh%20%2C%20Pakistan+(SMS)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create a route on google maps</a></iframe></div><br />
    </div>
</div>
    <div class="clearfix"> </div>
</div>
</div>
@endsection