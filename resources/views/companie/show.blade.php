@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-12">
           <hr>
           <a href="{{asset('companie/create')}}" class="btn btn-info" >ADD companies</a>
        <hr>
        <div class="row">
          <div class="col-md-12">

              @if(Session::has('message'))
            <p class="alert alert-success">{{Session('message')}}</p>
            @endif
         </div>
            <center><h3>Company Total Record</h3></center>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm">Id</th>
                  <th class="th-sm">Name</th>
                  <th class="th-sm">Email</th>
                  <th class="th-sm">logo</th>
                  <th class="th-sm">website</th>
                  <th class="th-sm">Edit</th>
                  <th class="th-sm">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($companies as $companie)

                <tr>
                  <td>{{$companie->id}}</td>
                  <td>{{$companie->name}}</td>
                  <td>{{$companie->email}}</td>
                  <td><img width="100px" height="100px" src="{{asset("img/$companie->logo")}}"></td>
                  <td>{{$companie->website}}</td>
                  <td><a href="{{route('companie.edit',$companie->id)}}" class="btn btn-primary">edite</a></td>

                  <td>
                      <form action="{{ route('companie.destroy',$companie->id) }}" method="post">
                          {{ method_field('DELETE') }}
                          <input type="hidden" name="_token" value="{{csrf_token()}}">

                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </td>

                </tr>
        
                @endforeach
                {{ $companies->links() }}
               
              </tbody>
              <tfoot>
               <tr>
                  <th class="th-sm">Id</th>
                  <th class="th-sm">Name</th>
                  <th class="th-sm">Email</th>
                  <th class="th-sm">logo</th>
                  <th class="th-sm">website</th>
                  <th class="th-sm">Edit</th>
                  <th class="th-sm">Delete</th>
                </tr>
              </tfoot>
            </table>
        </div>
    </div>


</div>
@endsection
