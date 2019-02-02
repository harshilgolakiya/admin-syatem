@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-12">
				
				<form class="" action="{{route('casedetailsUpdatedsavePost')}}" method="post">
					<!-- add csrf token field in every form -->
					{{csrf_field()}}
					<input type="hidden" name="id" value="{{$post->id}}">
					<div class="row">
						<div class="col-12">
							<div class="from-group">
								<label for="">id</label>
								<input type="text" name="id" required="" class="form-control" value="{{$post->id}}"/>			
												
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="from-group">
								<label for="">User_id</label>
								<input type="text" name="User_id" required="" class="form-control" value="{{$post->User_id}}"/>			
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="from-group">
								<label for="">Title</label>
								<input type="text" name="title" value="{{$post->Title}}" required="" class="form-control" >			
												
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-12">
							<div class="from-group">
								<label for="">Description</label>
								<textarea type="text" name="description" row="8" cols="10" required="" class="form-control">{{$post->Description}}</textarea>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-12">
							<div class="from-group">
								<label for=""> Lawyer_id</label>
								<input type="text" name="Lawyer_id" required="" class="form-control" value="{{$post->Lawyer_id}}" >			
												
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-primary">save</button>
							
						</div>	
					</div>			

				</form>
			</div>
		</div>
	</div>


@endsection