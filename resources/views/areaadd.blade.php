@extends('layouts.app')

@section('title', 'areaadd')

@section('content')


	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="au-card recent-report">
                    <div class="au-card-inner">
				
					<form class="" action="{{route('AsaveData')}}" method="post">

						{{csrf_field()}}

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Name</label>
								<input type="text" name="Name" value="" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">City_id</label>
								<input type="text" name="City_id" value="" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-primary">Add Data</button>
							</div>
						</div>

					</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection    