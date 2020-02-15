
@extends('layouts.app')

@section('content')


    <h1>Edit Profile</h1>
    


    <div class="card" style="width: 45rem;">
    <a href=""><img class="card-img-top" src="{{ URL::asset('storage/users/'. $user->avatar) }}" alt="image avatar"></a>
    <div class="card-body">
        <h5 class="card-title"><strong>Name: {{$user->name}}</strong></h5>
        <p class="card-text"><strong>Email : {{$user->email}}</strong></p>
        {{-- <a href="#" >Change Profile Picture</a> --}}
        {{-- {!! Form::open(['action' => ['ProfilePictureController@update_avatar', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <label class="btn btn-default btn-file">
            <strong>Change Profile Picture.</strong> <input type="file" name="avatar" style="display: none;">
        </label>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}} 
        {!! Form::close() !!} --}}
        {!! Form::open(['action' => ['PPController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group row">
        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Upload Your Image') }}</label>

        <div class="col-md-6">
            <input type="file" name="image" id="file">
        </div>
    </div>
    
    {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update Profile Picture', ['class'=>'btn btn-primary'])}} 
    {!! Form::close() !!}
    </div>
    </div>
    {!! Form::open(['action' => ['ProfileController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            {{-- {{Form::label('Name', 'Name')}} --}}
            <div class="col-md-6">
                {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Full Name'])}}

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
            {{-- {{Form::label('email', 'email')}} --}}
            <div class="col-md-6">
                {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
            <div class="col-md-6">
                {{Form::text('phone', $user->phone, ['class' => 'form-control', 'placeholder' => 'Cell no'])}}

                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
            <div class="col-md-6">
                {{Form::text('age', $user->age, ['class' => 'form-control', 'placeholder' => 'Age'])}}

                @if ($errors->has('age'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('age') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>
            <div class="col-md-6">
                {{Form::text('nationality', $user->nationality, ['class' => 'form-control', 'placeholder' => 'Nationality'])}}

                @if ($errors->has('nationality'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nationality') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
            <div class="col-md-6">
                {{Form::text('address', $user->address, ['class' => 'form-control', 'placeholder' => 'address'])}}

                @if ($errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
            <div class="col-md-6">
                {{Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'username'])}}

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}} 
    {!! Form::close() !!}
    <p>

        
    </p>
    {!!Form::open(['action' => ['ProfileController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right',])!!}
        {{Form::hidden('_method', 'DELETE')}}
        
        {{Form::submit('Deactivate Account', ['class' => 'btn btn-danger'],null,['onclick' => "return confirm('Are you sure?')"])}}
    {!!Form::close()!!}
@endsection