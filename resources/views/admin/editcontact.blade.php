
    
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
                                <h2>Update Contact</h2>
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
                            <form action="{{url('/updatecontact/'.$contacts['id'])}}" class="register-form" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="firstname">Name</label>
                                        <input type="text" name="name" value="{{$contacts['name']}}" id="name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" value="{{$contacts['email']}}" id="email">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="message">Message</label>
                                        <input type="text" name="message" value="{{$contacts['message']}}" id="message"></textarea>
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
