@extends('layouts.app')

@section('content')


			<div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"></h2>
                        <a href="{{url('casedetailsadd')}}">
                        <button class="au-btn au-btn-icon au-btn--blue" >
                        <i class="zmdi zmdi-plus"></i>add item</button></a>
                    </div>
                </div>
            </div>
            <br>

		<div class="row">
			<div class="col-12">
				<div class="table-responsive table--no-card m-b-30">
				<table class="table table-borderless table-striped table-earning">

					<thead>
					    <tr>
					      <th scope="col">Id</th>
					      <th scope="col">User_id</th>
					      <th scope="col">Title</th>
					      <th scope="col">Description</th>
					       <th scope="col">Lawyer_id</th>
					       <th scope="col">Delete</th>
					       <th scope="col">Update</th>
					    </tr>
					 </thead>

					 <!-- display this data in table -->
						<!-- Loop -->
						<tbody>
						@foreach($postdata as $post)
						<tr>
					      <th scope="row">{{$post->id}}</th>
					      <td>{{$post->User_id}}</td>
					      <td>{{$post->Title}}</td>
					      <td>{{$post->Description}}</td>
					      <td>{{$post->Lawyer_id}}</td>
					      <td><a href="{{route('casedetailsdeletePost',['id'=>$post->id])}}">Delete</a></td>
					      <td><a href="{{route('casedetailsupdatePost',['id'=>$post->id])}}">Update</a></td>
					    </tr>

						@endforeach
					</tbody>
				</table>
				</div>
			</div>
		</div>


@endsection