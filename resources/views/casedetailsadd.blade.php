@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="au-card recent-report">
                    <div class="au-card-inner">

				<form class="" action="{{route('casedetailssaveData')}}" method="post">
					<!-- add csrf token field in every form -->
					{{csrf_field()}}
					
					<div class="row">
						<div class="col-12">
							<div class="from-group">
								<label for="">User_id</label>
								<input type="text" name="User_id" value="" required="" class="form-control"/>			
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="from-group">
								<label for="">Title</label>
								<input type="text" name="title" value="" required="" class="form-control"/>			
												
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-12">
							<div class="from-group">
								<label for="">Description</label>
								<textarea type="text" name="description" row="8" cols="10" value="" required="" class="form-control"/></textarea>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-12">
							<div class="from-group">
								<label for=""> Lawyer_id</label>
								<input type="text" name="Lawyer_id" value="" required="" class="form-control"/>			
												
							</div>
						</div>
					</div>
					<br>					

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