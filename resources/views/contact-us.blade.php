@extends('layouts.app')

@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle"
             style="background-image:url('https://autocare.dexignlab.com/xhtml/images/background/bg4.jpg')">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{__('Contact us')}}</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="section-full content-inner bg-white contact-style-1">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-8">
                        @include('common.flashMessage')
                        <div class="p-a30 bg-gray clearfix m-b30 ">
                            <h2>{{__('Send a message')}}</h2>
                            <div class="dzFormMsg"></div>
                            <form method="POST" class="dzForm" action="{{route('contact-us.create')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" type="text" class="form-control"
                                                       placeholder="{{__('Name')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="email" type="email" class="form-control"
                                                       placeholder="Tu Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="phone" type="text" class="form-control"
                                                       placeholder="{{__('Telephone')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="subject" type="text" class="form-control"
                                                       placeholder="{{__('Subject')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="form-control"
                                                          placeholder="{{__('Send a message')}}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="col-lg-12">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<div class="input-group">--}}
                                    {{--<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&k=6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN&co=aHR0cHM6Ly9hdXRvY2FyZS5kZXhpZ25sYWIuY29tOjQ0Mw..&hl=es-419&v=gWN_U6xTIPevg0vuq7g1hct0&size=normal&cb=oib2jydm6psa" width="304" height="78" role="presentation" name="a-jhfj27ccy4ig" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>--}}
                                    {{--<input class="form-control d-none" style="display:none;" data-recaptcha="true"  data-error="Please complete the Captcha">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button ">
                                            <span>{{__('Submit')}}</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-4 d-lg-flex">
                        <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                            <h2 class="m-b10">{{__('Quick Contact')}}</h2>
                            <p>{{__('If you have any questions simply use the following contact details.')}}</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"><a href="#" class="icon-cell"><i
                                                class="ti-location-pin"></i></a></div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">{{__('Address')}}:</h6>
                                        <p>Av. Gabriela Pte. 1116, Puente Alto</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"><a href="#" class="icon-cell"><i
                                                class="ti-email"></i></a></div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                        <p>info@company.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"><a href="#" class="icon-cell"><i
                                                class="ti-mobile"></i></a></div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">{{__('Telephone')}}</h6>
                                        <p>+56 9 8554 0696</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="m-t20">
                                <ul class="dlab-social-icon dez-border dlab-social-icon-lg">
                                    <li><a href="https://www.facebook.com/" class="fab fa-facebook-f bg-primary"
                                           target="blank"></a></li>
                                    <li><a href="https://www.twitter.com/" class="fab fa-twitter bg-primary"
                                           target="blank"></a></li>
                                    <li><a href="https://www.linkedin.com/" class="fab fa-linkedin-in bg-primary"
                                           target="blank"></a></li>
                                    <li><a href="https://www.pinterest.com/" class="fab fa-pinterest-p bg-primary"
                                           target="blank"></a></li>
                                    <li><a href="https://www.mail.google.com/" class="fab fa-google-plus-g bg-primary"
                                           target="blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>
                <div class="row m-b30">
                    <div class="col-lg-12">
                        <!-- Map part start -->
                        <h2>{{__('Our Location')}}</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.9175174958527!2d-70.59707558490699!3d-33.58149078073671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d739277e443f%3A0xf16a3798952992e1!2sAv.%20Gabriela%20Pte.%201116%2C%20Puente%20Alto%2C%208150215%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1659562654540!5m2!1ses!2scl"
                            style="border:0; width:100%; height:400px;" allowfullscreen=""></iframe>
                        <!-- Map part END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection