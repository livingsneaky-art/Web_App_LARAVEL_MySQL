@extends('home')

@section('displayUserForm')
   <div class="container">    

   @if($errors->any())
   <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
      @endif

      @if(session()->has('success'))
      <div class="alert alert-success">
      {{ session()->get('success') }}
      </div>
      @endif
      <br />

      <div class="panel panel-default">
         <div class="panel-body">
         <br/>
         <form method="post" action="{{ url('store_image/insert_image') }}"  enctype="multipart/form-data">
         @csrf
         <div class="form-group">
         <div class="row">
         <label class="col-md-4" align="right">Enter Name of the Hotel</label>
         <div class="col-md-8">
         <input type="text" name="user_name" class="form-control" />
         </div>
         </div>
         </div>
         <div class="form-group">
         <div class="row">
         <label class="col-md-4" align="right">Select Your Hotel</label>
         <div class="col-md-8">
         <input type="file" name="user_image" />
         </div>
         </div>
         </div>
         <div class="form-group" align="center">
         <br />
         <br />
         <input type="submit" name="store_image" class="btn btn-primary" value="Reserve" />
         </div>
         </form>
      </div>
   </div>
@endsection