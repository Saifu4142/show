
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
<?php
// @if(count($errors)>0)
// @foreach($errors->all() as $error)
// <div class="alert alert-danger">
// {{$error}}
// </div>
// @endforeach
// @endif
// <div class="card-body">
// @if (session('status'))
// <div class="alert alert-success" role="alert">
// {{ session('status') }}
// </div>
// @endif
// @if(session('response'))
// <div class="alert alert-success">
// {{session('response')}}</div>
// @endif
?>
<div class="card">
<div class="card-header">Routes</div>
<form method="POST" action="{{ url('/searchBuses') }}">
@csrf
<br>
<div class="form-group row">
<label for="departure" class="col-md-4 col-form-label text-md-right">{{ __('Enter Departure') }}</label>

<div class="col-md-6">
<input id="departure" type="departure" class="form-control{{ $errors->has('departure') ? ' is-invalid' : '' }}" name="departure" value="{{ old('departure') }}" required autofocus>

@if ($errors->has('departure'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('departure') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group row">
<label for="arrival" class="col-md-4 col-form-label text-md-right">{{ __('Enter Arrival') }}</label>

<div class="col-md-6">
<input id="arrival" type="arrival" class="form-control{{ $errors->has('arrival') ? ' is-invalid' : '' }}" name="arrival" value="{{ old('arrival') }}" required autofocus>

@if ($errors->has('arrival'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('arrival') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
<label for="dob" class="col-md-4 control-label">Date</label>

<div class="col-md-6">                                
	<input type="date" name="dob" id="dob" required>
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Add Route') }}
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

