@extends('layouts.app')

@section('content')

    <div class="container">
        <!-- 404 Page -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-notfound text-center">
                        <form method="post">
                            <strong>403</strong>
                            <h5 class="m-b20 text-uppercase">{{__('Not')}} <i
                                    class="fa fa-exclamation-triangle text-primary"></i> {{__('Authorized')}}</h5>
                            <a href="{{route('home')}}" class="site-button-secondry"><span>{{__('Go To Home')}}</span><i
                                    class="fa fa-angle-right m-l15"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 Page END -->
    </div>
@endsection