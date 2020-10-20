<!DOCTYPE html>
<html>
<head>
	@include('partials.head')
</head>
<body>
	<div class="text-right" style="margin-top: 20px">
		<a href="{{ url('/exportData')}}"> <span class="btn btn-info btn-lg glyphicon glyphicon-export" style="padding: 8px 8px;"> Export</span></a>
		<a href="{{ url('/')}}" class="btn btn-lg btn-danger">Back<<</a>
	</div>
	<table class="table table-striped" style="margin: 20px;">
		<tbody>
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Marital Status</th>
				<th>Mobile</th>
				<th>State</th>
				<th>DOB</th>
			</tr>
			@foreach ($data as $key => $values)
				<tr>
					<td>
						{{$values->name}}
					</td>
					<td>
						{{$values->gender}}
					</td>
					<td>
						{{$values->maritalStatus}}
					</td>
					<td>
						{{$values->mobile}}
					</td>
					<td>
						{{$values->state}}
					</td>
					<td>
						{{$values->dob}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>