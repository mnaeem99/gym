@extends('index')
@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="resources/assets/img/breadcrumb/classes-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Contact</h2>
                        <div class="breadcrumb-option">
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Map Section Begin -->
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h4>Contacts Us</h4>
                        <div class="contact-address">
                            <div class="ca-widget">
                                <div class="cw-icon">
                                    <img src="resources/assets/img/icon/icon-1.png" alt="">
                                </div>
                                <div class="cw-text">
                                    <h5>Our Location</h5>
                                    <p>C-2 Johar Town Lahore</p>
                                </div>
                            </div>
                            <div class="ca-widget">
                                <div class="cw-icon">
                                    <img src="resources/assets/img/icon/icon-2.png" alt="">
                                </div>
                                <div class="cw-text">
                                    <h5>Phone:</h5>
                                    <p>+92 301888808</p>
                                </div>
                            </div>
                            <div class="ca-widget">
                                <div class="cw-icon">
                                    <img src="resources/assets/img/icon/icon-3.png" alt="">
                                </div>
                                <div class="cw-text">
                                    <h5>Mail</h5>
                                    <p>F2017065312@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h4>Leave A Comment</h4>
                        <div class="flash-message">
                                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    </p>
                                    @endif
                                    @endforeach
                        </div> 
                        <form action="{{url('/contact')}}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" id="name" placeholder="Your name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="email" id="email" placeholder="Your email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" id="message" placeholder="Your message feedback"></textarea>
                                </div>
                                <button type="submit">Send Message</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


@stop