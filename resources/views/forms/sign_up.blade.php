<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>

        <link rel='stylesheet' href="{{ asset ('/src/css/bootstrap.css') }}" media="all" type="text/css" >
          <link rel='stylesheet' href="{{ asset ('/src/css/style.css') }}" media="all" type="text/css" >
        
        <Script src='{{ asset("/src/js/jquery-3.1.1.min.js")}}' type ='text/javascript'></Script>
        <Script src='{{ asset("/src/js/bootstrap.min.js")}}' type ='text/javascript'></Script>


    </head>
    <body>
    @include('headers')

    <div class="container" id="container2">
       <div class="row">
        <div class="col-sm-3"></div>
         <div class="col-sm-6">
          <div class="col-sm-12" id="header">
           <div class="col-sm-4"></div>
           <div class="col-sm-4"><h3>sign up<h3>
           </div>
           <div class="col-sm-4"></div>
           
           </div>
             @if(Session::has('message'))
              <p class=" alert alert-success glyphicon glyphicon-save">{{Session::get('message')}}</p>
             @endif

             @foreach($errors->all() as $errors)
             <p> <li class=" alert alert-warning glyphicon glyphicon-warning-sign"> {{$errors}}</p>
             @endforeach

      <form  action="{{ url('/forms/sign_up') }}" method="post" >
          {{ csrf_field() }}
                 <div class="form-group">
        <h3> Sign up</h3>
            
          <label for "Name" >Name </label>
          <input type="text" name="name" id="name" class='form-control'>
        </div>
        <div class="form-group">
            
          <label for "email" >Email </label>
          <input type="email" name="email" id="email" class='form-control'>
        </div>
        <div class="form-group">
          <label for "password" >password</label>
          <input type="password" name="password" id="password" class='form-control'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


      </form>
      </div>
        <div class="col-sm-3"></div>
      </div>


    </div>
      
    </body>
</html>