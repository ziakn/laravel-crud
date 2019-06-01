@extends('master')


@section('content')
<div class="row">
    <div class="col-md-12">
        <br>
        <h3 align="centre">Edit student Data</h3>
        <br>
      
    </div>
<form method="POST" action="{{route('studentdataupdate')}}">
    @csrf

    <div>
        <input type="hidden" name="id" value="{{$studentdata->id}}" />
    </div>
    <div class="form-group">
        <input type="text" name="name" value="{{$studentdata->name}}" class="form-control" placeholder="Enter Fisrt name"/>
    </div>
    
    <div class="form-group">
            <input type="text" name="email" value="{{$studentdata->email}}" class="form-control" placeholder="Enter Email"/>
    </div>

    <div class="form-group">
        <input type="text" name="mobile" value="{{$studentdata->mobile}}" class="form-control" placeholder="Enter Mobile"/>
    </div>

    <div class="form-group">
      <input type="text" name="password" value="{{$studentdata->password}}" class="form-control" placeholder="Enter password"/>
  </div>
  <div class="form-group">
        <img  src="{{ URL::to('/')}}/images/att/{{$studentdata->image}}" class="img-thumbnail" width="75">
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