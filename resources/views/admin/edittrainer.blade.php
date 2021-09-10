<div class="content">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Trainer</h5>
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
              <form action="{{url('/updatetrainer/'.$trainers['id'])}}" class="register-form" method="post">
               @csrf
               <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Trainer Name</label>
                        <input type="text" class="form-control" name="name" value="{{$trainers['name']}}">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" name="designation" value="{{$trainers['designation']}}">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                      <label >Date Of Birth</label><br>
                      <input type="date" class="form-control" name="dob" value="{{$trainers['dob']}}">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Trainers</label>
                        <input type="text" class="form-control" name="about" value="{{$trainers['about']}}">
                      </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
      </div>
