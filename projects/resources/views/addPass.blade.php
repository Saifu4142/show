
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container">
<br>
<br>
<br>
<br>
<center>
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card">
<div class="card-header">Add Passenger Details</div>
<form method="POST" action="{{ url('showPassAdded') }}">
@csrf
<br>	

<div class="form-group row">
<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

@if ($errors->has('name'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('name') }}</strong>
</span>
@endif


</div> 
</div>
<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

<div class="col-md-6">
<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

@if ($errors->has('email'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

<div class="col-md-6">
<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

@if ($errors->has('password'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

<div class="col-md-6">
<input id="contact" type="number" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required autofocus>

@if ($errors->has('contact'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('contact') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

<div class="col-md-6">
<input id="gender" type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" required autofocus>

@if ($errors->has('gender'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('gender') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

<div class="col-md-6">
<input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

@if ($errors->has('address'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('address') }}</strong>
</span>
@endif
</div>
</div>




<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Add Profile') }}
</button>


</div>
</div>
</form>
</div>
</div>
</div>
</div>
</center>
</div>

