<!DOCTYPE html>
<html>
    <head>
        <title>Vehicle record</title>

       
         <link rel='stylesheet' href="{{ asset ('/src/css/bootstrap.css') }}" media="all" type="text/css" >
        <link rel='stylesheet' href="{{ asset ('/src/css/style.css') }}" media="all" type="text/css" >
        <link rel='stylesheet' href="{{ asset ('/src/css/bootstrap-datetimepicker.css') }}" media="all" type="text/css" >

          <Script src='{{ asset("/src/js/jquery-3.1.1.min.js")}}' type ='text/javascript'></Script>
         <Script src='{{ asset("/src/js/bootstrap.min.js")}}' type ='text/javascript'></Script>
         <Script src='{{ asset("/src/js/bootstrap-datetimepicker.js")}}' type ='text/javascript'></Script>



    </head>

<body>
<div class="navbar navbar-default navbar-fixed-top" >
    <div class="container" id='color'>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Vehicle Records </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-plus">Enter Record <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"  data-toggle="modal" data-target="#driverModal">Driver</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#maintenanceModal">Maintenance</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#trekModal">Trek</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#" data-toggle="modal" data-target="#vehicleNameModal">Vehicle name</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#vehicleDetailsModal">Vehicle details</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#yearsModal">Years</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">  <span class="glyphicon glyphicon-eye-open">View Records</span> <b class="caret" ></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Driver</a></li>
                        <li><a href="#">Maintenace</a></li>
                        <li><a href="#">Trek</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#">Vehicle name</a></li>
                        <li><a href="#">Vehicle details</a></li>

                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

 @if(Session::has('message'))
 <p  class="glyphicon glyphicon-save">{{Session::get('message')}}</p>
 @endif

 @foreach($errors->all() as $errors)
 <p> <li class="glyphicon glyphicon-warning-sign"> {{$errors}}</p>
 @endforeach


      <div class="container">

          <!-- <beginning of driver's form > -->
     
     
        <div class="modal fade" id="driverModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Driver</h4>
              </div>
              <div class="modal-body">
               
                     <form   action="{{ url('/forms/input_forms1') }}" method="post">
                         {{ csrf_field() }}
                      <div class="form-group">
                          
                        <label for "first_name" >First name</label>
                        <input type="text" name="first_name" id="first_name" class='form-control'>
                         </div>
                         <div class="form-group">
                        <label for "last_name" >Last name</label>
                        <input type="text" name="last_name" id="last_name" class='form-control'>   
                        
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                 
              </div>
      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
      </div><!--  <ending of driver's form> -->


      <div class="container"><!-- <beginning of maintenance form > -->
     
     
        <div class="modal fade" id="maintenanceModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enter Maintenance Details</h4>
              </div>
              <div class="modal-body">
               
                <form action="{{ url('/forms/input_forms2') }}" method="post">
                    {{ csrf_field() }}
                  <div class="form-group">
                    
                  <label for "last_date" >Last maintenance  date</label>
                  <input type="date" name="last_date" id="last_date" class='form-control form_datetime'>

                  </div>
                  <div class="form-group">
                    <label for "next_date" >Next maintenance  date</label>
                    <input type="date" name="next_date" id="next_date" class='form-control form_datetime'>
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
                    <input type="text" name="vehicle_id" id="vehicle_id" class='form-control'>
                    
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                         
              </div>
              
           </div>
            <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
      </div><!--  <ending of maintenance form> -->

      <div class="container"><!-- <beginning of Trek form > -->
     
     
        <div class="modal fade" id="trekModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enter Trek Details</h4>
              </div>
              <div class="modal-body">
               
                <form action="{{ url('/forms/input_forms3') }}" method="post">
                    {{ csrf_field() }}
                  <div class="form-group">
            
                   <label for "place_visited" >Place visited </label>
                   <input type="text" name="place_visited" id="place_visited" class='form-control'>
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
                        <label for "reason " >Reason for trek</label>
                        <input type="time" name="reason" id="reason" class='form-control'>
                    </div>
                  <div class="form-group">
                   <label for "date" >Trek date</label>
                   <input type="date" name="date" id="date" class='form-control form_datetime'>
                  </div>
                  <div class="form-group">
                   <label for "id" >Driver ID</label>
                   <input type="text" name="id" id="id" class='form-control'>
                  </div>
                  <div class="form-group">
                   <label for "Vid" >Vehicle ID</label>
                   <input type="text" name="Vid" id="Vid" class='form-control'>
          
                  </div>
       
                   
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                         
              </div>
              
           </div>
              <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
      </div><!--  <ending of Trek form> -->

       <div class="container"><!-- <beginning of Vehicle name form > -->
     
     
        <div class="modal fade" id="vehicleNameModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Vehicle Name</h4>
              </div>
              <div class="modal-body">
               
                <form action="{{ url('/forms/input_forms4') }}" method="post"  >
                    {{ csrf_field() }}
                  <div class="form-group">
            
                   <label for "enter-name" >Enter vehicle name</label>
                   <input type="text" name="name" id="enter_name" class='form-control'>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                         
              </div>
              
           </div>
              <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
      </div><!--  <ending of Vehicle name form> -->



       <div class="container"><!-- <beginning of Vehicle details form > -->
     
     
        <div class="modal fade" id="vehicleDetailsModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Vehicle Details</h4>
              </div>
              <div class="modal-body">
               
                <form action="{{ url('/forms/input_forms5') }}" method="post">
                    {{ csrf_field() }}
                  <div class="form-group">
              
                    <label for "model_name" >Model name</label>
                    <input type="text" name="model_name" id="model_name" class='form-control'>
                  </div>
                  <div class="form-group">

                    <label for "Registration-number" >Model name</label>
                    <input type="text" name="Registration_number" id="Registration_number" class='form-control'>
                  </div>
                  <div class="form-group">
                    <label for "vehicle_name" >Vehicle name</label>
                    <select id="vehicle_name" class='form-control'>
                     <option>2</option>
                    
                    </select>
                  </div>
                  <div class="form-group">

                    <label for "year_bought" >Year bought</label>
                    <select id="year_bought" class="form-control"> <option>2</option></select>
                  </div>
                              
                  <button type="button" class="btn btn-primary">Submit</button>
                </form>
                         
              </div>
              
           </div>
              <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
      </div><!--  <ending of Vehicle details form> -->

      <div class="container"><!-- <beginning of years form > -->
     
     
        <div class="modal fade" id="yearsModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enter Years</h4>
              </div>
              <div class="modal-body">
               
                <form action="{{ url('/forms/input_forms6') }}" method="post">
                    {{ csrf_field() }}
                  <div class="form-group">

                    <input type='text' class="form-control form_datetime" name="year" id="year"  />

                  </div>
                              
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                         
              </div>
              
           </div>
              <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
      </div>

 <!--  <ending of years form> -->

<script type="text/javascript">

    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd'});
</script>
    </body>

 
</html>