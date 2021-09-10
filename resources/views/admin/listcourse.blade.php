@extends('master')
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              
                <h4 class="card-title"> Available Courses <a href="{{ url('/addcourse') }}" class="btn btn-primary float-right">ADD</a></h4>
              </div>
              <div class="flash-message">
                  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                      @if(Session::has('alert-' . $msg))
                      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                      </p>
                      @endif
                  @endforeach
              </div> 
                            
              <div class="card-body">
                <div class="table">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th class="text-right">Action</th>
                    </thead>
                    <tbody>
                    @foreach ($courses as $course)
                      <tr>
                        <td>{{$course['id']}}</td>
                        <td>{{$course['name']}}</td>
                        <td>{{$course['description']}}</td>
                        <td>{{$course['stime']}}</td>
                        <td>{{$course['etime']}}</td>
                        <td class="text-right">
                         <a href="{{url('/editcourse/'.$course['id'])}}"><i class="fa fa-edit" style="font-size:24px"></i></a> &nbsp;
                         <a href="{{url('/deletecourse/'.$course['id'])}}"><i class="fa fa-trash" style="font-size:24px"></i></a>              
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          </div>
@stop