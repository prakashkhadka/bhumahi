@section('content')
	<h1>Categories</h1>
	@if($categories)
		<div class="col-sm-6">
			{!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

			<div class="form-group">
				{!! Form::label('name', 'Name:') !!}
				{!! Form::text('name', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
			</div>
			{!! Form::close() !!}
		</div>
		@endif
	<div class="col-sm-6">
		<table class="table">
		    <thead>
		      <tr>
		        <th>Id</th>
		        <th>Name</th>
		        <th>Created</th>
		        <th>Updated</th>
		      </tr>
		    </thead>
		    <tbody>
			    @foreach($categories as $category)
			      <tr>
			        <td>{{$category->id}}</td>
			        <td>{{$category->name}}</td>
			        <td>{{$category->created_at ? $category->created_at->diffForHumans() : "NO Date"}}</td>
			        <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'No Date'}}</td>
			        <td><a href="{{route('admin.categories.edit', $category->id)}}"><button class='btn btn-warning'>Edit</button></a></td>
			      </tr>
		      	@endforeach
		    </tbody>
		  </table>
	</div>