@extends('layouts.app')



@section('content')


	
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"></h2>
                        <a href="{{url('cityadd')}}">
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
							    <th>Id</th>
							    <th>City_name</th>
								<th>Delete</th>
								<th>Update</th>
						    </tr>
						</thead>
						<!-- display this data in table -->
						<!-- loop  -->
				
						<tbody>
							@foreach($postdata as $post)
								<tr>
							      <th scope="row">{{$post->id}}</th>
							      <td>{{$post->City_name}}</td>
							      <td><a href="{{route('CdeletePost',['id'=>$post->id])}}">Delete</a></td>
							      <td><a href="{{route('CUpdatePost',['id'=>$post->id])}}">Update</a></td>
							    </tr>
							@endforeach
						</tbody>	
					</table>	
				</div>
			</div>
		</div>

@endsection