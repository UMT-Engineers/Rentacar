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
  <div class="row" style="background:#eee">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <th scope="row">{{$user['id']}}</th>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>
                <a href="#" class="btn btn-info btn-sm">
                <span class="glyphicon glyphicon-pencil"></span> Edit 
                </a>&nbsp;&nbsp;
                <a href="#" class="btn btn-info btn-sm">
                  <span class="glyphicon glyphicon-trash"></span> Delete 
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

  </div>
</div>


</main>


@stop