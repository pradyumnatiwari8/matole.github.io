@extends('AdminZone/AdminMaster')
@section('Content')
    <link href="../css/akash.css" rel="stylesheet">
    <script src="../css/akash1.js"></script>
    <script>
        $(document).ready(function (){
            $("#example").DataTable();
        })
    </script>
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 align="center" style="margin-top: -10px;background: maroon;min-height: 30px;"><font color="white">Complaints / Advices</font></h3>
                <hr/>
                <table class="table table-responsive" id="example">
                    <thead>
                    <tr style="background: maroon; color:white;">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Message</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->Name}}</td>
                            <td>{{$user->Email}}</td>

                            <td>{{$user->Mobile}}</td>
                            <td>{{$user->Message}}</td>
                            <td>
                                <a href="../delete/{{$user->Name}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection()