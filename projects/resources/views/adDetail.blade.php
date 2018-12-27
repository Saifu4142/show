
<h1>Admin Details</h1>
@if(count($admin)>0)
@foreach($admin->all() as $admin)
<table border=1>
<tr>
<th>Admin Id
</th>
<th>Admin Email
</th>
<th>Admin Password
</th>
</tr>
<tr>
<td>
{{$admin->id}}&nbsp;&nbsp;
</td>
<td>
{{$admin->email}}&nbsp;&nbsp;
</td>
<td>
{{$admin->password}}
</td>
</tr>
</table>
<br>


@endforeach	
@else
	<p>No Records Found</p>
@endif
