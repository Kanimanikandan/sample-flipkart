<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>product details</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</style>
</head>
<body>

<div class="flex-container-fluid" style="background-color:lightblue;">
	<span class="border border-secondary" style="height:10px; width:10px;">
	
	<form action="{{url('productlist-save')}}" method="post" enctype="multipart/form-data" >
		 @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
             @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
		@csrf
		 <div class="row" >
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-secondary" >
  <a class="navbar-brand" href="{{url('admindashboard')}}" >back</a>
                
                </nav>
            </div>
</nav>
      </div>
      <h4 class="text-center" style="font-size:18px;">Product details</h4>
		<div class="form-group"  style="height: 60px; width:400px; margin: auto; padding:auto;">
			<label>productname</label>
			<input type="text" name="name" class="form-control" value="{{old('name')}}">
			 <span class="text-danger">@error('name') {{$message}} @enderror</span>
		</div>
		<br>
		<div class="form-group" style="height: 60px; width:400px; margin: auto; padding:auto;">
			<label>Image upload</label>
			<input type="file" required name="image" class="form-control"  >
			 <span class="text-danger">@error('image') {{$message}} @enderror</span>
		</div>
		<br>
	
		<div class="form-group" style="height: 60px; width:400px; margin: auto; padding:auto;">
		<button type="submit" class="btn btn-primary form-control">save</button>
	</div>
		<br>

	</form>
</span>
	<br>
	<div class="row">
		<div class="col-md-8">
			@if(Session::has('message'))
			<div class="alert alert-{{Session::get('class')}} alert-dismissibale fade show" role="alert">
				{{Session::get('message')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
					<span aria-hidden="true"></span>

				</button>
			</div>
			@endif
			<table class="table table-bordered text-center">
				<style >
					table,th,td{
						border: 1px solid black;
						border-collapse: collapse;
						margin-right: 100px;


					}
				</style>
				<div class="container">
					<thead>
						<tr>
							<th>productname</th>
							<th>image</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>
											
						@foreach($tests as $test)
<tr>
	<td>{{$test->name}}</td>
	<td>@if($test->image_url)
		<img src="{{asset('asset/uploads/tests/'.$test->image_url)}}" height="100" width="100">
			@endif
	<td>
		<a href="{{url('product-edit')}}/{{$test->id}}" class="btn btn-primary">Edit</a>
		<a href="{{url('product-delete')}}/{{$test->id}} " class="btn btn-danger">Delete</a>
	</td>
</tr>
@endforeach
</tbody>
</table>
{{$tests->links('pagination::bootstrap-4')}}

</div>
</div>
</div>
</div>
</body>
</html>