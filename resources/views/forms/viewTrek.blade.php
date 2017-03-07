<!DOCTYPE html>
<html>
@include('forms.header2')
<div class="container">
    <body>
    <table class="table table-striped table-bordered">

        <thead>
        <tr>
            <td>Place Visited</td>
            <td>Reason for Trek</td>
            <td>Time departed</td>
            <td>Time arrived</td>
            <td>Trek date</td>
            <td>Drivers Name</td>
            <td>Vehicle Name</td>
            <td>Model</td>
            <td>Registration No.</td>

        </tr>

        </thead>
        <tbody>
        @foreach($trek as $key=>$value)
        <tr>
            <td>{{$value->place_visited}}</td>
            <td>{{$value->reason_for_visit}}</td>
            <td>{{$value->departure_time}}</td>
            <td>{{$value->arrival_time}}</td>
            <td>{{$value->trek_date}}</td>
            <td>{{$value->first_name}}</td>
            <td>Edit</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </body>
</div>
</html>