<footer class="site-footer" style="display: block; height: 691px;">
    <!-- footer top part -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 footer-col-4">
                    <div class="widget widget_about">
                        <div class="logo-footer logo-white"><img
                                src="https://autocare.dexignlab.com/xhtml/images/logo.png" alt=""></div>
                        <p><strong>{{setting('site.title')}}</strong> {{setting('site.description')}}</p>
                        <ul class="dlab-social-icon dez-border">
                            @forelse($socialNetworks as $socialNetwork)
                                <li><a class="fa {{$socialNetwork->icon}}" href="{{$socialNetwork->url}}"
                                       target="blank"></a></li>
                            @empty
                            @endforelse
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 footer-col-4">
                    <div class="widget widget_services">
                        <h4 class="m-b15 text-uppercase">{{__('Our services')}}</h4>
                        <div class="dlab-separator-outer m-b10">
                            <div class="dlab-separator bg-white style-skew"></div>
                        </div>
                        <ul>
                            @forelse($services as $service)
                                <li>{{$service->name}}</li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 footer-col-4">
                    <div class="widget widget_getintuch">
                        <h4 class="m-b15 text-uppercase">{{__('Contact us')}}</h4>
                        <div class="dlab-separator-outer m-b10">
                            <div class="dlab-separator bg-white style-skew"></div>
                        </div>
                        <ul>
                            <li><i class="fa fa-map-marker"></i><strong>{{__('Address')}}</strong> {{setting('site.address') }}
                            </li>
                            <li><i class="fa fa-phone"></i><strong>{{__('Telephone')}}</strong>{{setting('site.phone')}}
                            </li>
                            <li><i class="fa fa-envelope"></i><strong>email</strong>{{setting('site.email')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
