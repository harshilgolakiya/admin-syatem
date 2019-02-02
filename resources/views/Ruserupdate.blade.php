@extends('layouts.app')

@section('content')

	
<div class="container">
		<div class="row">
			<div class="col-12">
				
					<form class="" action="{{route('RusersaveUpdatedsPost')}}" method="post">

						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$post->id}}">

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Name</label>
								<input type="text" name="name" value="{{$post->name}}" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Address</label>
								<textarea type="text" name="address" row="8" cols="10" value="" class="form-control" required="">{{$post->address}}</textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Contact No</label>
								<input type="text" name="contactno" value="{{$post->contactno}}" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">E-mail</label>
								<input type="email" name="email" value="{{$post->email}}" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Password</label>
								<input type="Password" name="password" value="{{$post->password}}" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Security Question</label>
								<select name="securityquestion">
									<option value="Q1">What is ur name?</option>
									<option value="Q2">What is ur first school</option>
								</select>
								</div>	
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Security Answer</label>
								<input type="text" name="securityanswer" value="{{$post->securityanswer}}" class="form-control" required="">
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