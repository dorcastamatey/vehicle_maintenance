<!DOCTYPE html>
<html>
    <head>
        <title>Vehicle record</title>

        <link rel='stylesheet' href="{{ asset ('/src/css/bootstrap.css') }}" media="all" type="text/css" >
          <link rel='stylesheet' href="{{ asset ('/src/css/style.css') }}" media="all" type="text/css" >
        
        <Script src='{{ asset("/src/js/jquery-3.1.1.min.js")}}' type ='text/javascript'></Script>
        <Script src='{{ asset("/src/js/bootstrap.min.js")}}' type ='text/javascript'></Script>


    </head>
     @include('headers')
    <body>
    
    <div class="container" >
       <div class="row">
        <div class="col-sm-3"></div>
         <div class="col-sm-6">
          <div class="col-sm-12" id="header">
           <div class="col-sm-4"></div>
           <div class="col-sm-4"><h3>Login</h3>
           </div>
           <div class="col-sm-4"></div>
           
           </div>
      <form>
        <div class="form-group">
          <h3> Login</h3>
            
          <label for "email" >Email </label>
          <input type="email" name="email" id="email" class='form-control'>
        </div>
        <div class="form-group">
          <label for "password" >password</label>
          <input type="password" name="password" id="password" class='form-control'>
        </div>
        <button type="button" class="btn btn-primary">Submit</button>

      </form>
      </div>
        <div class="col-sm-3"></div>
      </div>


    </div>
      
    </body>
</html>