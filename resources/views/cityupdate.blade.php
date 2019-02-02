@extends('layouts.app')

@section('content')


<div class="container">
		<div class="row">
			<div class="col-12">
				
					<form class="" action="{{route('citysaveUpdatedsPost')}}" method="post">

						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$post->id}}">

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">City_Name</label>
								<input type="text" name="City_name" value="{{$post->City_name}}" class="form-control" required="">
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