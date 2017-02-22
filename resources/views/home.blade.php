<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

       
         <link rel='stylesheet' href="{{ asset ('/src/css/bootstrap.css') }}" media="all" type="text/css" >
        <!-- <link rel='stylesheet' href="{{ asset ('/src/css/style.css') }}" media="all" type="text/css" > -->
        
          <Script src='{{ asset("/src/js/jquery-3.1.1.min.js")}}' type ='text/javascript'></Script>
         <Script src='{{ asset("/src/js/bootstrap.min.js")}}' type ='text/javascript'></Script>
    </head>
        
    <body> 
        



 <div class="navbar navbar-default navbar-fixed-top">
    <div class="container" id="color">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Vehicle Records </a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right" >
          <!-- <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li> -->
<!--          <li class="dropdown">-->
<!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-plus">Enter Record <b class="caret"></b></a>-->
<!--            <ul class="dropdown-menu">-->
<!--              <li><a href="#">Driver</a></li>-->
<!--              <li><a href="#">Maintenance</a></li>-->
<!--              <li><a href="#">Trek</a></li>-->
<!--              <!-- <li class="divider"></li> -->-->
<!--              <li><a href="#">Vehicle name</a></li>-->
<!--              <li><a href="#">Vehicle details</a></li>-->
<!--              -->
<!--            </ul>-->
<!--          </li>-->

<!--          <li class="dropdown">-->
<!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown">  <span class="glyphicon glyphicon-eye-open">View Records</span> <b class="caret" ></b></a>-->
<!--            <ul class="dropdown-menu">-->
<!--              <li><a href="#">Driver</a></li>-->
<!--              <li><a href="#">Maintenance</a></li>-->
<!--              <li><a href="#">Trek</a></li>-->
<!--              <!-- <li class="divider"></li> -->-->
<!--              <li><a href="#">Vehicle name</a></li>-->
<!--              <li><a href="#">Vehicle details</a></li>-->
<!--              -->
<!--            </ul>-->
<!--          </li>-->
          <li id="position2"><a href="{{url('login')}}" >Login</a></li>
          <li id="position1"><a href="{{url('sign_up')}}" >Sign up</a></li>

          <!-- <li><a href="#contact">Contact</a></li> -->
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  
    </body>
</html>

