@extends('layouts.app')

@section('content')


<div class="container">
		<div class="row">
			<div class="col-12">
				
					<form class="" action="{{route('areasaveUpdatedsPost')}}" method="post">

						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$post->id}}">

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Name</label>
								<input type="text" name="Name" value="{{$post->Name}}" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">City_id</label>
								<input type="text" name="City_id" value="{{$post->City_id}}" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>

@endsection