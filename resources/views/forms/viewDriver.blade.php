
@include('forms.header2')
<div class="container">
<body>


<div class="container">

    <!-- <beginning of driver's form > -->


<!--    <div class="modal fade" id="driverModal" role="dialog">-->
<!--        <div class="modal-dialog">-->
<!---->
<!--            <!-- Modal content-->-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                    <h4 class="modal-title">Add Driver</h4>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    -->
<!--                    <form   action="/forms/" method="post">-->
<!--                        {{ csrf_field() }}-->
<!--                        {{method_field('PUT')}}-->
<!--                        <div class="form-group">-->
<!---->
<!--                            <label for "first_name" >First name</label>-->
<!--                            <input type="text" name="first_name" id="first_name" class='form-control'>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for "last_name" >Last name</label>-->
<!--                            <input type="text" name="last_name" id="last_name" class='form-control'>-->
<!---->
<!--                        </div>-->
<!--                        <button type="submit" class="btn btn-primary">Update</button>-->
<!--                    </form>-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
</div>
  <table class="table table-striped table-bordered">

  <thead>
   <tr>
       <td>Driver ID</td>
       <td>First Name</td>
       <td>Last Name</td>

   </tr>

   </thead>
    <tbody>
    @foreach($driver as $key=>$value)
    <tr>
       <td>{{$value->driver_id}}</td>
       <td>{{$value->first_name}}</td>
       <td>{{$value->last_name}}</td>
        <td class="glyphicon glyphicon-pencil" >
         <a href="/forms/{{$value->driver_id}}" >Edit</a></td>
    </tr>
    @endforeach
    </tbody>
  </table>

</body>
</div>





