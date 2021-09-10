@extends('index')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="resources/assets/img/breadcrumb/classes-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Registration</h2>
                        <div class="breadcrumb-option">
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                            <span>Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Register Section Begin -->
    <section class="register-section classes-page spad">
        <div class="container">
            <div class="classes-page-text">
                <div class="row">
                <div class="col-lg-2">
                        <div class="register-pic">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="register-text">
                            <div class="section-title">
                                <h2>Register Now</h2>
                                <p>The First 7 Day Trial Is Completely Free With The Teacher</p>
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
                            <form action="{{url('/register')}}" class="register-form" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="firstname">First Name</label>
                                        <input type="text" name="firstname" id="firstname">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" name="lastname" id="lastname">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" name="dob" id="dob">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for ="mobile">Mobile No</label>
                                        <input type="text" name="mobile" id="mobile">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="course">Courses</label><br>
                                        <select name="course" id="course">
                                            <option class="opt" id="option">--select--</option>
                                            <option class="opt" id="weightloss">Weight Loss</option>
                                            <option class="opt" id="yoga">Yoga</option>
                                            <option class="opt" id="bodybuild">Cross Fit</option>
                                            <option class="opt" id="karate">Karate</option>
                                            <option class="opt" id="boxing">Boxing</option>
                                            <option class="opt" id="bodybuild">Body Builder</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="time">Classes Schedule</label><br>
                                        <select name="time" id="time">
                                            <option class="opt" id="option">--select--</option>
                                            <option class="opt" id="option0">08:00 AM - 10:00 AM</option>
                                            <option class="opt" id="option1">09:00 AM - 11:00 AM</option>
                                            <option class="opt" id="option2">10:00 AM - 12:00 PM</option>
                                            <option class="opt" id="option3">11:00 AM - 01:00 PM</option>
                                            <option class="opt" id="option4">04:00 PM - 06:00 PM</option>
                                            <option class="opt" id="option5">05:00 PM - 07:00 PM</option>
                                            <option class="opt" id="option6">06:00 PM - 08:00 PM</option>
                                            <option class="opt" id="option7">07:00 PM - 09:00 PM</option>
                                            <option class="opt" id="option8">08:00 PM - 10:00 PM</option>
                                            <option class="opt" id="option9">09:00 PM - 11:00 PM</option>
                                            <option class="opt" id="option10">10:00 PM - 12:00 PM</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <button type="submit" class="register-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="register-pic">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section classes-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>UNLIMITED CLASSES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="resources/assets/img/classes/classes-1.jpg">
                        <div class="si-text">
                            <h4>Yoga</h4>
                            <span><i class="fa fa-user"></i> Ryan Knight</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="resources/assets/img/classes/classes-4.jpg">
                        <div class="si-text">
                            <h4>Karate</h4>
                            <span><i class="fa fa-user"></i> Kevin McCormick</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="resources/assets/img/classes/classes-2.jpg">
                        <div class="si-text">
                            <h4>Running</h4>
                            <span><i class="fa fa-user"></i> Randy Rivera</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="resources/assets/img/classes/classes-5.jpg">
                        <div class="si-text">
                            <h4>Dance</h4>
                            <span><i class="fa fa-user"></i> Russell Lane</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="resources/assets/img/classes/classes-3.jpg">
                        <div class="si-text">
                            <h4>Personal Training</h4>
                            <span><i class="fa fa-user"></i> Cole Robertson</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="resources/assets/img/classes/classes-6.jpg">
                        <div class="si-text">
                            <h4>Weight Loss</h4>
                            <span><i class="fa fa-user"></i> Ryan Scott</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="resources/assets/img/classes/classes-7.jpg">
                        <div class="si-text">
                            <h4>Box</h4>
                            <span><i class="fa fa-user"></i> Chester Bowen</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="resources/assets/img/classes/classes-8.jpg">
                        <div class="si-text">
                            <h4>Cardio</h4>
                            <span><i class="fa fa-user"></i> Jorge Fernandez</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="resources/assets/img/classes/classes-8.jpg">
                        <div class="si-text">
                            <h4>Crossfit</h4>
                            <span><i class="fa fa-user"></i> Chester Bowen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->

    <!-- Classes Timetable Section Begin -->
    <section class="classes-timetable spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Class Timetable</h2>
                    </div>
                    <div class="nav-controls">
                        <ul>
                            <li class="active" data-tsfilter="all">All Class</li>
                            <li data-tsfilter="gym">Gym</li>
                            <li data-tsfilter="crossfit">Crossfit</li>
                            <li data-tsfilter="cardio">Cardio</li>
                            <li data-tsfilter="body">Body</li>
                            <li data-tsfilter="yoga">Yoga</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="workout-time">10.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>10.00 - 11.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="yoga">
                                        <h6>Yoga</h6>
                                        <span>10.00 - 12.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Body</h6>
                                        <span>10.00 - 12.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>10.00 - 11.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">14.00</td>
                                    <td></td>
                                    <td class="hover-bg ts-item">
                                        <h6>Running</h6>
                                        <span>14.00 - 16.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item">
                                        <h6>Box</h6>
                                        <span>14.00 - 15.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>14.00 - 16.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time">16.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>16.00 - 18.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>16.00 - 19.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="yoga">
                                        <h6>Yoga</h6>
                                        <span>16.00 - 18.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>16.00 - 20.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">18.00</td>
                                    <td class="hover-bg ts-item">
                                        <h6>Box</h6>
                                        <span>18.00 - 22.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Body</h6>
                                        <span>18.00 - 20.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                        <h6>Crossfit</h6>
                                        <span>18.00 - 21.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>18.00 - 22.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time">20.00</td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>20.00 - 12.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Body</h6>
                                        <span>20.00 - 21.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>20.00 - 22.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                        <h6>Crossfit</h6>
                                        <span>20.00 - 21.00</span>
                                        <div class="trainer-name">
                                            John Smith
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer Table Schedule Section End -->


@stop