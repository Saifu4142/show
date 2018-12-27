
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

<h1>Buse Route Details</h1>
<?php
// @if(count($ways) > 0)
// @foreach($ways->all() as $ways)
// <table border=1>
// <tr>
// <th>From City
// </th>
// <th>To City
// </th>
// <th>Date 
// </th>
// </tr>
// <tr>
// <td>
// {{$ways->departure}}&nbsp;&nbsp;
// </td>
// <td>
// {{$ways->arrival}}&nbsp;&nbsp;
// </td>
// <td>
// {{$ways->dob}}
// </td>
// </tr>
// </table>
// <br>


// @endforeach	
// @else
	// <p>No Records Found</p>
// @endif
?>
<table border=1>
<tr>
<th>From City
</th>
<th>To City
</th>
<th>Date 
</th>
</tr>
<tr>
<td>
{{$ways->departure}}&nbsp;&nbsp;
</td>
<td>
{{$ways->arrival}}&nbsp;&nbsp;
</td>
<td>
{{$ways->dob}}
</td>
</tr>
</table>
<br>


</div>
</center>
</div>

