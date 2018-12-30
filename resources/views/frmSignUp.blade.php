
@extends('index')
@section('content')

<main id="page-content">

<div class="container">
  <h2 class="text-center"> Signup Or Register</h2>
  <div class="flash-message">
       @foreach (['danger', 'warning', 'success', 'info'] as $msg)
         @if(Session::has('alert-' . $msg))

           <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
           </p>
         @endif
      @endforeach
  </div> 
  <div class="row" style="background:#ddd">
    <div class="col-md-6 col-md-offset-3">

        <form action="{{url('/createuser')}}" method="post">
          @csrf
            <div class="form-group">
              <label for="Name">Name:</label>
              <input type="input" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
   </div>
  
</div>


</main>

@stop
