<!DOCTYPE html>
<html>
@include('forms.header2')
<div class="container">
    <body>
    <table class="table table-striped table-bordered">

        <thead>
        <tr>
            <td>Last Date</td>
            <td>Next Date</td>
            <td>Cost of maintenance</td>
            <td>Fault</td>
            <td>Edit</td>
        </tr>

        </thead>
        <tbody>
        @foreach($maintain as $key=>$value)
        <tr>
            <td>{{$value->last_maintenance_date}}</td>
            <td>{{$value->next_maintenance_date}}</td>
            <td>{{$value->Cost}}</td>
            <td>{{$value->fault}}</td>
            <td>Edit</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </body>
</div>
</html>




