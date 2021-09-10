
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="resources/assets/img/breadcrumb/classes-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Update</h2>
                        <div class="breadcrumb-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>Update/Edit</span>
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
                                <h2>Update Customer</h2>
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
                            <form action="{{url('/updatecustomer/'.$customers['id'])}}" class="register-form" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="firstname">First Name</label>
                                        <input type="text" name="firstname" value="{{$customers['firstname']}}" id="firstname">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" name="lastname" value="{{$customers['lastname']}}" id="lastname">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" name="dob" value="{{$customers['dob']}}" id="dob">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" value="{{$customers['address']}}" id="address">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" value="{{$customers['email']}}" id="email">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for ="mobile">Mobile No</label>
                                        <input type="text" name="mobile" value="{{$customers['mobile']}}" id="mobile">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="course">Courses</label>
                                        <select name="course" id="course">
                                            <option class="opt" value="--select--"<?php if($customers['course']=='--select--'): ?> selected="selected"<?php endif; ?> id="option">--select--</option>
                                            <option class="opt" value="Weight Loss"<?php if($customers['course']=='Weight Loss'): ?> selected="selected"<?php endif; ?> id="weightloss">Weight Loss</option>
                                            <option class="opt" value="Yoga"<?php if($customers['course']=='Yoga'): ?> selected="selected"<?php endif; ?> id="yoga">Yoga</option>
                                            <option class="opt" value="Cross Fit"<?php if($customers['course']=='Cross Fit'): ?> selected="selected"<?php endif; ?> id="Cross Fit">Cross Fit</option>
                                            <option class="opt" value="Karate"<?php if($customers['course']=='Karate'): ?> selected="selected"<?php endif; ?> id="karate">Karate</option>
                                            <option class="opt" value="Boxing"<?php if($customers['course']=='Boxing'): ?> selected="selected"<?php endif; ?> id="boxing">Boxing</option>
                                            <option class="opt" value="Body Builder"<?php if($customers['course']=='Body Builder'): ?> selected="selected"<?php endif; ?> id="bodybuild">Body Builder</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="time">Classes Schedule</label>
                                        <select name="time" value="{{$customers['time']}}" id="time">
                                            <option class="opt" value="--select--"<?php if($customers['time']=='--select--'): ?> selected="selected"<?php endif; ?> id="option">--select--</option>
                                            <option class="opt" value="08:00 AM - 10:00 AM"<?php if($customers['time']=='08:00 AM - 10:00 AM'): ?> selected="selected"<?php endif; ?> id="option0">08:00 AM - 10:00 AM</option>
                                            <option class="opt" value="09:00 AM - 11:00 AM"<?php if($customers['time']=='09:00 AM - 11:00 AM'): ?> selected="selected"<?php endif; ?> id="option1">09:00 AM - 11:00 AM</option>
                                            <option class="opt" value="10:00 AM - 12:00 PM"<?php if($customers['time']=='10:00 AM - 12:00 PM'): ?> selected="selected"<?php endif; ?> id="option2">10:00 AM - 12:00 PM</option>
                                            <option class="opt" value="11:00 AM - 01:00 PM"<?php if($customers['time']=='11:00 AM - 01:00 PM'): ?> selected="selected"<?php endif; ?> id="option3">11:00 AM - 01:00 PM</option>
                                            <option class="opt" value="04:00 PM - 06:00 PM"<?php if($customers['time']=='04:00 PM - 06:00 PM'): ?> selected="selected"<?php endif; ?> id="option4">04:00 PM - 06:00 PM</option>
                                            <option class="opt" value="05:00 PM - 07:00 PM"<?php if($customers['time']=='05:00 PM - 07:00 PM'): ?> selected="selected"<?php endif; ?> id="option5">05:00 PM - 07:00 PM</option>
                                            <option class="opt" value="06:00 PM - 08:00 PM"<?php if($customers['time']=='06:00 PM - 08:00 PM'): ?> selected="selected"<?php endif; ?> id="option6">06:00 PM - 08:00 PM</option>
                                            <option class="opt" value="07:00 PM - 09:00 PM"<?php if($customers['time']=='07:00 PM - 09:00 PM'): ?> selected="selected"<?php endif; ?> id="option7">07:00 PM - 09:00 PM</option>
                                            <option class="opt" value="08:00 PM - 10:00 PM"<?php if($customers['time']=='08:00 PM - 10:00 PM'): ?> selected="selected"<?php endif; ?> id="option8">08:00 PM - 10:00 PM</option>
                                            <option class="opt" value="09:00 PM - 11:00 PM"<?php if($customers['time']=='09:00 PM - 11:00 PM'): ?> selected="selected"<?php endif; ?> id="option9">09:00 PM - 11:00 PM</option>
                                            <option class="opt" value="10:00 PM - 12:00 PM"<?php if($customers['time']=='10:00 PM - 12:00 PM'): ?> selected="selected"<?php endif; ?> id="option10">10:00 PM - 12:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="register-btn">Update</button>
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
