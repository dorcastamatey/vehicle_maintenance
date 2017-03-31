
@include('forms.header2')
<div class="container">
    <body>

    <table class="table table-striped table-bordered">

        <thead>
        <tr>
            <td>Vehicle Name</td>
            <td>Model</td>
            <td>Registration Number</td>
            <td>Year Bought</td>
            <td>Edit</td>
        </tr>

        </thead>
        <tbody>
        @foreach($details as $key=>$value)
        <tr>
            <td>{{$value->vehicle_name}}</td>
            <td>{{$value->model}}</td>
            <td>{{$value->reg_no}}</td>
            <td>{{$value->year}}</td>
            <td class="glyphicon glyphicon-pencil"><a>Edit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </body>
</div>





