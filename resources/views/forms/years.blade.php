<!DOCTYPE html>
<html>
    <head>
        <title>Vehicle record</title>

         <link rel='stylesheet' href="{{ asset ('/src/css/bootstrap.min.css') }}" media="all" type="text/css" >
          <link rel='stylesheet' href="{{ asset ('/src/css/style.css') }}" media="all" type="text/css" >
        
        <Script src='{{ asset("/src/js/jquery-3.1.1.min.js")}}' type ='text/javascript'></Script>
        <Script src='{{ asset("/src/js/bootstrap.min.js")}}' type ='text/javascript'></Script>


    </head>
    <body>
     <div class="container" id="color">
       <div class="row">
        <div class="col-sm-3"></div>
         <div class="col-sm-6">
          <div class="col-sm-12" id="header">
           <div class="col-sm-4"></div>
           <div class="col-sm-4"><h3>Enter Year<h3>
           </div>
           <div class="col-sm-4"></div>
           
           </div>
      <form>
      	<div class="form-group">
      	    
      		<label for "enter-year" >Enter year</label>
      		<input type="date" name="year" id="enter-year" class='form-control'>
      		

      	</div>

      </form>
      </div>
        <div class="col-sm-3"></div>
      </div>


    </div>
    </body>
</html>