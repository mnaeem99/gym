@extends('master')
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Customers </h4>
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
                      <th>DateofBirth</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Courses</th>
                      <th>Class Timing</th>
                      <th class="text-right">Action</th>
                    </thead>
                    <tbody>
                    @foreach ($customers as $customer)
                      <tr>
                        <td>{{$customer['id']}}</td>
                        <td>{{$customer['firstname']}} {{$customer['lastname']}}</td>
                        <td>{{$customer['dob']}}</td>
                        <td>{{$customer['address']}}</td>
                        <td>{{$customer['email']}}</td>
                        <td>{{$customer['mobile']}}</td>
                        <td>{{$customer['course']}}</td>
                        <td>{{$customer['time']}}</td>
                        <td class="text-right">
                         <a href="{{url('/editcustomer/'.$customer['id'])}}"><i class="fa fa-edit" style="font-size:24px"></i></a> &nbsp;
                         <a href="{{url('/deletecustomer/'.$customer['id'])}}"><i class="fa fa-trash" style="font-size:24px"></i></a>              
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