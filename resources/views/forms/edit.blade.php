                    <form   action="/forms/{{$driver->driver_id}}" method="post">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="form-group">

                            <label for "first_name" >First name</label>
                            <input type="text" name="first_name" id="first_name" class='form-control'>
                        </div>
                        <div class="form-group">
                            <label for "last_name" >Last name</label>
                            <input type="text" name="last_name" id="last_name" class='form-control'>

                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>