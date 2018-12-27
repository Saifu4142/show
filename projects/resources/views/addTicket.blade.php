
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
<div class="card-header">Add Ticket Details</div>
<form method="POST" action="{{ url('showTicketAdded') }}">
@csrf
<br>	

<div class="form-group row">
<label for="ticket_type" class="col-md-4 col-form-label text-md-right">{{ __('Ticket Type') }}</label>

<div class="col-md-6">
<input id="ticket_type" type="text" class="form-control{{ $errors->has('ticket_type') ? ' is-invalid' : '' }}" name="ticket_type" value="{{ old('ticket_type') }}" required autofocus>

@if ($errors->has('ticket_type'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('ticket_type') }}</strong>
</span>
@endif


</div> 
</div>
<div class="form-group row">
<label for="ticket_price" class="col-md-4 col-form-label text-md-right">{{ __('Ticket Price') }}</label>

<div class="col-md-6">
<input id="ticket_price" type="number" class="form-control{{ $errors->has('ticket_price') ? ' is-invalid' : '' }}" name="ticket_price" value="{{ old('ticket_price') }}" required autofocus>

@if ($errors->has('ticket_price'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('ticket_price') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Add Ticket') }}
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

