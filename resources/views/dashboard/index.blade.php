@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>you are login!</p>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
           <hr>
           <a href="{{asset('companie/')}}" class="btn btn-info" >company</a>
        <hr>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">

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
