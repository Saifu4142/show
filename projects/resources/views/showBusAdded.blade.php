
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

<h1>Buses Details</h1>

<table border=1>
<tr>
<th>Bus Type
</th>
<th>Status
</th>
<th>Total Seats
</th>
<th>Seats Left
</th>
<th>Depart Time
</th>
<th>Arrival Time 
</th>
<tr>
<td>
{{$buses->bus_type}}&nbsp;&nbsp;
</td>
<td>
{{$buses->status}}&nbsp;&nbsp;
</td>
<td>
{{$buses->total_seat}}&nbsp;&nbsp;
</td>
<td>
{{$buses->seat_left}}&nbsp;&nbsp;
</td>
<td>
{{$buses->depart_time}}&nbsp;&nbsp;
</td>
<td>
{{$buses->arrival_time}}&nbsp;&nbsp;
</td>


</tr>
</table>
<br>

</div>
</center>
</div>

