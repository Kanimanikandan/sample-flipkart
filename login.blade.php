<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
 <div class="container mt-3">
<div class="row" style="width:1000px;">
    <div class="col-md-3" style="background-color:royalblue;">
        <label class="text-white"  style="font-size:24px; margin-left: 20px;">Login</label>
        <label class="text-white" style="font-size:20px; margin-left: 20px;">Get access to your<br>Orders, Wishlist and<br>Recommendations</label>
        <img  class="text-center" src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/login_img_c4a81e.png" style="margin-top: 120px;" >
    </div>
        <form action="{{route('login-user')}}" method="post" enctype="multipart/form-data">
             @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
             @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
    @csrf
        <div class="col-md-9">
            
         <div class="form-group" style="height: 60px; width:400px; margin: auto; padding:auto;">

            <label class="text-muted" >Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{old('email')}}">
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
        </div>
        <br>
        <div class="form-group" style="height: 60px; width:400px;">
            <label class="text-muted" >Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{old('password')}}">
            <span class="text-danger">@error('password') {{$message}} @enderror</span>
           
        </div>
       
        <br>
         <div class="form-group" >
   <button type="submit" class="btn btn-primary form-control" style="margin-top: 10px; margin-left: 20px; padding-top: 2px; width: 350px;">Login</button>
     </div>
            <br>

<a class="text-link" href="{{url('registration')}}" style="font-size:14px; margin-left: 30px; padding-left: 7px;">New to Flipkart? Create an account</a>
        </div>
    </div>
</form>
</body>
</html>