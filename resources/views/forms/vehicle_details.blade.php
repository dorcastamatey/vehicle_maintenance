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
           <div class="col-sm-4"><h3>Add Vehicle<h3>
           </div>
           <div class="col-sm-4"></div>
           
           </div>
      <form action="{{ url('/forms/input_forms') }}" method="post">
          {{ csrf_field() }}
      	<div class="form-group">
      	    
      		<label for "model_name" >Model name</label>
      		<input type="text" name="model name" id="model_name" class='form-control'>
        </div>
        <div class="form-group">

      		<label for "Registration-number" >Model name</label>
      		<input type="text" name="Registration number" id="Registration-number" class='form-control'>
        </div>
        <div class="form-group">
            <label for "vehicle_name" >Vehicle name</label>
      		  <select id="vehicle_name" class='form-control'>
      		   <option>2</option>
      			
      		</select>
        </div>
        <div class="form-group">

      		<label for "year_bought" >Year bought</label>
      		<input type="date" name="year_bought" id="year_bought" class='form-control'>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
      </div>
        <div class="col-sm-3"></div>
      </div>


    </div>
      
    </body>
</html>