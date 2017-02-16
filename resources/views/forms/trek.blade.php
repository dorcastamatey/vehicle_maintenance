<!DOCTYPE html>
<html>
    <head>
        <title>Vehicle record</title>

        <link rel='stylesheet' href="{{ asset ('/src/css/bootstrap.css') }}" media="all" type="text/css" >
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
           <div class="col-sm-4"><h3>Record trek<h3>
           </div>
           <div class="col-sm-4"></div>
           
           </div>
      <form>
      	<div class="form-group">
      	    
      		<label for "place_visited" >Place visited </label>
      		<input type="text" name="place" id="place_visited" class='form-control'>
        </div>
        <div class="form-group">
      		<label for "time_departed" >Departure time</label>
      		<input type="time" name="time_departed" id="time_departed" class='form-control'>
        </div>
        <div class="form-group">
          <label for "time_arrived " >Arrival time</label>
      		<input type="time" name="time_arrived" id="time_arrived" class='form-control'>
        </div>
        <div class="form-group">
      		<label for "date" >Trek date</label>
          <input type="date" name="date" id="date" class='form-control'>
        </div>
        <div class="form-group">
          <label for "id" >Driver ID</label>
          <input type="text" name="id" id="id" class='form-control'>
        </div>
        <div class="form-group">
          <label for "Vid" >Vehicle ID</label>
          <input type="text" name="Vid" id="Vid" class='form-control'>
      		
      	</div>
        <button type="button" class="btn btn-primary">Submit</button>

      </form>
      </div>
        <div class="col-sm-3"></div>
      </div>


    </div>
      
    </body>
</html>