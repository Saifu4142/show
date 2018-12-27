
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
<div class="card-header">Add Discount Details</div>
<form method="POST" action="{{ url('showdiscount') }}">
@csrf
<br>	

<div class="form-group row">
<label for="discounted_price" class="col-md-4 col-form-label text-md-right">{{ __('Discounted Price') }}</label>

<div class="col-md-6">
<input id="discounted_price" type="number" class="form-control{{ $errors->has('discounted_price') ? ' is-invalid' : '' }}" name="discounted_price" value="{{ old('discounted_price') }}" required autofocus>

@if ($errors->has('discounted_price'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('discounted_price') }}</strong>
</span>
@endif


</div> 
</div>




<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Add Discount') }}
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

