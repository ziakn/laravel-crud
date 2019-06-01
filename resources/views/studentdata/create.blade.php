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


        @if(count($errors))
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<br/>
				{{-- <ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul> --}}
			</div>
		@endif



        <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }} " >
            <input type="text" name="name"  value="{{ old('name') }}" class="form-control" placeholder="Enter Fisrt name"/>
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        
        <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }} ">
                <input type="text" name="email"  value="{{ old('email') }}" class="form-control" placeholder="Enter Email"/>
                <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>

        <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }} ">
            <input type="text" name="mobile"  value="{{ old('mobile') }}" class="form-control" placeholder="Enter Mobile"/>
            <span class="text-danger">{{ $errors->first('mobile') }}</span>
        </div>

        <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }} ">
          <input type="text" name="password"  value="{{ old('password') }}" class="form-control" placeholder="Enter password"/>
          <span class="text-danger">{{ $errors->first('password') }}</span>
      </div>
       <div class="form-group  ">
            <label class=" text-right">Select Profile Image</label>
            <div class="col-md-8 {{ $errors->has('image') ? 'has-error' : '' }} ">
            <input type="file" name="image"  value="{{ old('image') }}" />
            <span class="text-danger">{{ $errors->first('image') }}</span>
            </div> 
     </div>
           
        <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>

       </form>
    </div>    
@endsection