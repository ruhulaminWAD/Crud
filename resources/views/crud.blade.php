@extends('layout.app')

@section('content')
<div class="container mt-3">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h2 class="card-title">CRUD Page</h2>
					</div>
					<div class="card-body">
						<form action="{{ route('crud_store')}}" method="post">
							{{ csrf_field()}}
							<div class="mb-3">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name" name="name">
							</div>
						</form>
						
						<h2 class="card-title">All CRUD Information</h2>
						<table class="table table-striped">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th colspan="2">Timestamps</th>
							</tr>
							@foreach($crud_data as $data)
								<tr>
									<td>
										{{ $data->id}}
									</td>
									<td>
										{{ $data->name}}
										<span>
											<a class=" btn btn-danger" href="{{ route('crudData_delete', ['id' => $data->id])}}">X</a>
											<a class=" btn btn-info" href="{{ route('croudData_edite', ['id'=>$data->id])}}">Edit</a>
										</span>	
									</td>
									<td>
										{{ $data->created_at}}
									</td>
									<td>
										{{ $data->updated_at}}
									</td>
								</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection