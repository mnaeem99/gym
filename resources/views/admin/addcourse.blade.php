@extends('master')
@section('content')
<div class="content">
            <div class="card">
              <div class="card-header">
                <h5 class="title">ADD New Course</h5>
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
              <form action="{{url('/addcourse')}}" method="post">
               @csrf
                <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Course Name">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                      <label >Start Time</label><br>
                      <input type="time" class="form-control" name="stime">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                      <label >End Time</label><br>
                      <input type="time" class="form-control" name="etime">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Course Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Enter Course Description">
                      </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
      </div>
@stop