<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
      
  <style>
#border1 {
display: inline-block;
width: 300px;
height: 150px;
margin: 6px;
color:yellow;
}


.border{
display: inline-block;
width: 300px;
height: 90px;
margin: 6px;
}
</style>

</head>
<body>
    <div class="flex-container-fluid" style="background-color:lightblue; height:1000px;" >
      <div class="row">
      <div class="col-md-12 col-md-offset-12 " style="margin-top:20px; background: lavender;">
          <h4>AdminDashboard</h4>
          <hr>

          <div class="row" >
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('productlis')}}">product</a>
                
                </nav>
            </div>
</nav>
      </div>
      
       <table class="table">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
            </thead>
            <tbody>
                <tr>
                <td>{{$test->name}}</td>
                <td>{{$test->email}}</td>
                <td>{{$test->role}}</td>
                <td><a href="{{url('admin')}}">logout</a></td>
              </tr>
            </tbody>

        </thead>
           

       </table>
</div>
</div>
</body>
</html>