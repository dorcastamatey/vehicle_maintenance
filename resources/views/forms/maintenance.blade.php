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
           <div class="col-sm-4"><h3>Record Maintenance<h3>
           </div>
           <div class="col-sm-4"></div>
           
           </div>
      <form>
      	<div class="form-group">
      	    
      		<label for "last_date" >Last maintenance  date</label>
      		<input type="date" name="last date" id="last_date" class='form-control'>

        </div>
        <div class="form-group">
      		<label for "next_date" >Next maintenance  date</label>
      		<input type="date" name="next date" id="Registration-number" class='form-control'>
        </div>
        <div class="form-group">
          <label for "cost" >Maintence cost</label>
      		<input type="number" name="cost" id="cost" class='form-control'>
        </div>
      	<div class="form-group">
      		<label for "fault" >Vehicle fault</label>
          <input type="text" name="fault" id="fault" class='form-control'>
        </div>
        <div class="form-group">
          <label for "id" >Vehicle ID</label>
          <input type="text" name="id" id="id" class='form-control'>
      		
      	</div>
        <button type="button" class="btn btn-primary">Submit</button>

      </form>
      </div>
       <div class="col-sm-3"></div>
      </div>


    </div>
    </body>
</html>