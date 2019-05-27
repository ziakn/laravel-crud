@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="centre">Add Data</h3>
            <br>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                    <li>{{@$error}}</li>
                        @endforeach
                    </ul>
                    </div>    

            @endif
            @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>
                            {{\Session::get('success')}}
                        </p>
                    </div>

            @endif
        </div>
    <form method="POST" action="{{ url('/student') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="first_name" class="form-control" placeholder="Enter Fisrt name"/>

        </div>
        <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="Enter Last name"/>
    
            </div>
            <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
        
                </div>
    </form>
    </div>    
@endsection