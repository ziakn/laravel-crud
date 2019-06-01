@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="centre">Add student Detail</h3>
            <br>
         
        </div>
    <form method="POST" action="{{route('studentdatasave')}}" enctype="multipart/form-data">
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
            <label class=" text-right">Select Profile Image</label>
            <div class="col-md-8">
            <input type="file" name="image" />
            </div> 
     </div>
           
        <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>

       </form>
    </div>    
@endsection