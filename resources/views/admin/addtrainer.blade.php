@extends('master')
@section('content')
<div class="content">
            <div class="card">
              <div class="card-header">
                <h5 class="title">ADD New Trainers</h5>
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    </p>
                    @endif
                    @endforeach
                </div> 
              </div>
              <div class="card-body">
              <form action="{{url('/addtrainer')}}" method="post">
               @csrf
                <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Trainer Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Course Name">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                      <label >Date Of Birth</label><br>
                      <input type="date" class="form-control" name="dob">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Trainers</label>
                        <input type="text" class="form-control" name="about" placeholder="Enter About Trainers">
                      </div>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image" >
                        <label class="form-control">Choose file</label>
                      </div>
                    </div>
                </div>
                -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
      </div>
@stop