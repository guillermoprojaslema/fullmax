@extends('layouts.app')

@section('content')
    <div class="page-content">

        <!-- OUR SERVICES -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase">{{__('Our services')}}</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator style-skew"></div>
                    </div>
                    <p>{{__('Check our services')}}</p>
                </div>
                <div class="row">
                    @forelse($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper center m-b40">
                                <div class="icon-bx-sm m-b20">
                                <span class="icon-cell">
                                    <a href=""><i class="fa {{$service->icon}}" aria-hidden="true"></i></a>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">{{$service->name}}</h5>
                                    <p>{{$service->description}}</p>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
        <!-- OUR SERVICES END-->
    </div>
@endsection