@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

           @if(count($errors) > 0)
             <ul>
                 @foreach($errors->all() as $error)
                     <li class="alert alert-info">{{$error}}</li>
                 @endforeach
             </ul>
           @endif

          <center><h3>Edite Company Record</h3></center>
          
          <form method="post" action="{{route('companie.update',$companie->id)}}" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
              <label for="post">name</label>
              <input type="text" class="form-control" name="name" value="{{$companie->name}}"  placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="post">E-mail</label>
              <input type="email" class="form-control" name="email" value="{{$companie->email}}"  placeholder="Enter email">
            </div>

            <div class="form-group">
              <label for="post">website</label>
              <input type="text" class="form-control" name="website" value="{{$companie->website}}"  placeholder="Enter website name">
            </div>
           
            
            <div class="form-group">
              <label for="img">Upload logo</label>
              <input type="file" class="form-control-file" name="logo" id="img">
            </div>
            <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
          </form>
            
        </div>
    </div>
</div>
@endsection
