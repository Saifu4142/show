
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

<h1>Passenger Details</h1>

<table border=1>
<tr>
<th>Name
</th>
<th>Email
</th>
<th>Password 
</th>
<th>Contact
</th>
<th>Gender
</th>
<th>Address
</th>
<tr>
<td>
{{$pass->name}}&nbsp;&nbsp;
</td>
<td>
{{$pass->email}}&nbsp;&nbsp;
</td>
<td>
{{$pass->password}}&nbsp;&nbsp;
</td>
<td>
{{$pass->contact}}&nbsp;&nbsp;
</td>
<td>
{{$pass->gender}}&nbsp;&nbsp;
</td>
<td>
{{$pass->address}}&nbsp;&nbsp;
</td>



</tr>
</table>
<br>

</div>
</center>
</div>

