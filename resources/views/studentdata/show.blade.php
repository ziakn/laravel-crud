@extends('master')

@section('content')
        <div class="row">
                <div class="col-md-12">
                    <br>
                    <h3 align="centre"> Student Data</h3>
                    <br>
                   
                    <div align="right">
                    <a href="{{url('/studentdata/create')}}" class="btn btn-outline-primary">Add</a>
                    </div>
                    <table class="table table-bordered table-striped hover">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile </th>
                            <th>Password </th>
                            <th>Image </th>
                            <th>Edit </th>
                            <th>Delete </th>
                        </tr>
                            <tr>
                                @foreach ($studentdata as $row)
                                    <tr>
                                    <td>{{$row['name']}}</td>
                                    <td>{{$row['email']}}</td>
                                    <td>{{$row['mobile']}}</td>
                                    <td>{{$row['password']}}</td>
                                    <td><img src="{{ URL::to('/')}}/images/att/{{$row['image']}}" class="img-thumbnail" width="50"></td>
                                    <td>
                                    <a href="{{url('/studentdata/edit/'.$row['id'])}}" class="btn btn-warning">Edit</a> 
                                    </td>
                                    <td>
                                        <a href="{{url('/studentdata/delete/'.$row['id'])}}" class="btn btn-danger">Delete</a>
                                    </td>
                                    </tr>
                                @endforeach
                            </tr>
                    </table>
                </div>
        </div>   
 <script>
    //  $(document).ready(function(){
    //      $('.delete_form').on('submit',function(){
    //         if (confirm("Are you sure you want to delete it?")) {
    //             return true;
    //         } else {
    //             return false;
    //         }
    //      });

    //  });
 </script>       
        
@endsection