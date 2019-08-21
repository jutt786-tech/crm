@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-12">
          <center><h3>Welcome to company Home page</h3></center>
           <hr>
           <a href="{{asset('companie/show')}}" class="btn btn-info" >View companies</a>
           <a href="{{asset('companie/create')}}" class="btn btn-info" >ADD companies</a>
        <hr>
        <div class="row">
          <div class="col-md-12">

              @if(count($errors) > 0)
             <ul>
                 @foreach($errors->all() as $error)
                     <li class="alert alert-info">{{$error}}</li>
                 @endforeach
             </ul>
           @endif
         </div>
            
        </div>
    </div>


</div>
@endsection
