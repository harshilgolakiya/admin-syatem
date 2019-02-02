@extends('layouts.app')

@section('content')


<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="au-card recent-report">
                    <div class="au-card-inner">
				
					<form class="" action="{{route('RusersaveData')}}" method="post">

						{{csrf_field()}}

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Name</label>
								<input type="text" name="name" value="" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Address</label>
								<textarea type="text" name="address" row="8" cols="10" value="" class="form-control" required=""></textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Contact No</label>
								<input type="text" name="contactno" value="" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">E-mail</label>
								<input type="email" name="email" value="" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Password</label>
								<input type="Password" name="password" value="" class="form-control" required="">
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
							<!--	<input type="text" name="securityquestion" value="" class="form-control" required="">-->
								</div>	
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="form-group">
								<label for="">Security Answer</label>
								<input type="text" name="securityanswer" value="" class="form-control" required="">
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