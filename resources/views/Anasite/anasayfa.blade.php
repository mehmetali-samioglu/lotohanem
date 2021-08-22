@extends('Anasite.layouts.master')
@section('title','MAS | '.config('app.name'))

@section('content')

    <!-- Middle Content Start -->
    <div class="vd_content-wrapper"  >
        <div class="vd_container">
            <div class="vd_content clearfix">
                <div class="vd_head-section clearfix">
                    <div class="vd_panel-header">
                        <ul class="breadcrumb">
                            <li><a href="index-2.html">Home</a> </li>
                            <li class="active">Custom Functions</li>
                        </ul>
                        <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code."
                             data-step=5 data-position="left">
                            <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip"
                                 data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
                            <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip"
                                 data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
                            <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle"
                                 data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vd_content-section clearfix">
                    <div class="row">
                        <router-view ></router-view>
                        {{--<sepet></sepet>--}}
                    </div>
                </div>
             </div>
            <!-- .vd_content -->
        </div>
        <!-- .vd_container -->
    </div>
    <!-- Middle Content End -->
@endsection



@section('js')

@endsection


@section('css')

@endsection