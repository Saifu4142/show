
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
<div class="card-header">Add Buses Details</div>
<form method="POST" action="{{ url('busInfo') }}">
@csrf
<br>	

<div class="form-group row">
<label for="bus_type" class="col-md-4 col-form-label text-md-right">{{ __('Enter Bus Type') }}</label>

<div class="col-md-6">
<input id="bus_type" type="text" class="form-control{{ $errors->has('bus_type') ? ' is-invalid' : '' }}" name="bus_type" value="{{ old('bus_type') }}" required autofocus>

@if ($errors->has('bus_type'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('bus_type') }}</strong>
</span>
@endif


</div> 
</div>
<div class="form-group row">
<label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Enter Status') }}</label>

<div class="col-md-6">
<input id="status" type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ old('status') }}" required autofocus>

@if ($errors->has('status'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('status') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="total_seat" class="col-md-4 col-form-label text-md-right">{{ __('Enter Total Seats') }}</label>

<div class="col-md-6">
<input id="total_seat" type="number" class="form-control{{ $errors->has('total_seat') ? ' is-invalid' : '' }}" name="total_seat" value="{{ old('total_seat') }}" required autofocus>

@if ($errors->has('total_seat'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('total_seat') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="seat_left" class="col-md-4 col-form-label text-md-right">{{ __('Enter Seat Left') }}</label>

<div class="col-md-6">
<input id="seat_left" type="number" class="form-control{{ $errors->has('seat_left') ? ' is-invalid' : '' }}" name="seat_left" value="{{ old('seat_left') }}" required autofocus>

@if ($errors->has('seat_left'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('seat_left') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group row">
<label for="depart_time" class="col-md-4 col-form-label text-md-right">{{ __('Enter Depart Time') }}</label>

<div class="col-md-6">
<input id="depart_time" type="time" class="form-control{{ $errors->has('depart_time') ? ' is-invalid' : '' }}" name="depart_time" value="{{ old('depart_time') }}" required autofocus>

@if ($errors->has('depart_time'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('depart_time') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="arrival_time" class="col-md-4 col-form-label text-md-right">{{ __('Enter Arrival Time') }}</label>

<div class="col-md-6">
<input id="arrival_time" type="time" class="form-control{{ $errors->has('arrival_time') ? ' is-invalid' : '' }}" name="arrival_time" value="{{ old('arrival_time') }}" required autofocus>

@if ($errors->has('arrival_time'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('arrival_time') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Add Bus') }}
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

