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
						<form action="{{ route('croudData_update', [ 'id' => $crudData->id]) }}" method="post">
							{{ csrf_field()}}
							<div class="mb-3">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name" name="name" value="{{ $crudData->name}}">
							</div>
						</form>
					
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection