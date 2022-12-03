<header class="site-header header mo-left header-style-1">
    <!-- top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="dlab-topbar-left"></div>
                <div class="dlab-topbar-right">
                    <ul class="social-bx list-inline float-end">
                        @forelse($socialNetworks as $socialNetwork)
                            <li><a class="fa {{$socialNetwork->icon}}" href="{{$socialNetwork->url}}"
                                   target="blank"></a></li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar END-->
    <!-- main header -->
    <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
        <div class="main-bar bg-primary clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header logo-white mostion"><a href="{{route('home')}}"><img
                            src="{{url('/images/logo4.png')}}" width="193" height="89"
                            alt=""></a></div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>




                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header logo-white mostion"><a href="{{route('home')}}"><img
                                src="{{url('/images/logo3.png')}}" width="193" height="89"
                                alt=""></a></div>
                    <ul class="nav navbar-nav nav-style">
                        <li @if(Request::is('/')) class="active" @endif><a href="{{route('home')}}">{{__('Home')}}<i
                                    class="fa fa-chevron-down"></i></a>
                        </li>
                        <li @if(Request::is('who-we-are')) class="active" @endif><a
                                href="{{route('who-we-are')}}">{{__('Who we are')}}<i
                                    class="fa fa-chevron-down"></i></a>
                        </li>
                        <li @if(Request::is('our-services')) class="active" @endif><a
                                href="{{route('our-services')}}">{{__('Our Services')}}<i
                                    class="fa fa-chevron-down"></i></a>
                        </li>

                        <li @if(Request::is('contact-us')) class="active" @endif><a
                                href="{{route('contact-us.create')}}">{{__('Contact us')}}<i
                                    class="fa fa-chevron-down"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>