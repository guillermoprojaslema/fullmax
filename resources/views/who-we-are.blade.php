@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="text-uppercase"> {{__('Meet The Team')}}</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-secondry style-skew"></div>
                    </div>
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum
                        ha sido el texto de relleno estándar de las industrias desde el año 1500</p>
                </div>
                <div class="section-content text-center ">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media"><a href="{{route('who-we-are')}}"> <img width="358" height="460" alt=""
                                                                                      src="https://autocare.dexignlab.com/xhtml/images/our-team/pic1.jpg">
                                    </a>
                                    <div class="dlab-info-has skew-has  bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                                   target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10">
                                    <h4 class="dlab-title text-uppercase m-b5">Nashid Martines</h4>
                                    <span class="dlab-member-position">Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media"><a href="{{route('who-we-are')}}"> <img width="358" height="460" alt=""
                                                                                      src="https://autocare.dexignlab.com/xhtml/images/our-team/pic2.jpg">
                                    </a>
                                    <div class="dlab-info-has skew-has bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                                   target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10 bg-white">
                                    <h4 class="dlab-title text-uppercase m-b5">konne Backfield</h4>
                                    <span class="dlab-member-position">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media"><a href="our-team.html"> <img width="358" height="460" alt=""
                                                                                      src="https://autocare.dexignlab.com/xhtml/images/our-team/pic3.jpg">
                                    </a>
                                    <div class="dlab-info-has skew-has bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                                   target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10">
                                    <h4 class="dlab-title text-uppercase m-b5">Hackson Willingham</h4>
                                    <span class="dlab-member-position">Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b10">
                                <div class="dlab-media"><a href="our-team.html"> <img width="358" height="460" alt=""
                                                                                      src="https://autocare.dexignlab.com/xhtml/images/our-team/pic4.jpg">
                                    </a>
                                    <div class="dlab-info-has skew-has bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"
                                                   target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                                   target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10">
                                    <h4 class="dlab-title text-uppercase m-b5">konne Backfield</h4>
                                    <span class="dlab-member-position">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team member END -->
    </div>

@endsection