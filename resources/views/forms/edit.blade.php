@include('forms.header2')

<div class="container">
 <body>
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
</div>
 </body>
</div>