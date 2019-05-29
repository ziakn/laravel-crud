@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="centre">Add student Detail</h3>
            <br>
            {{-- @if (count($errors) > 0)
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

            @endif --}}
        </div>
    <form method="POST" action="/studentdata">
        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Fisrt name"/>
        </div>
        
        <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Enter Email"/>
        </div>

        <div class="form-group">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile"/>
        </div>

        <div class="form-group">
          <input type="text" name="password" class="form-control" placeholder="Enter password"/>
      </div>
           
        <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>

       </form>
    </div>    
@endsection