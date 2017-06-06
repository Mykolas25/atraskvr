@extends('front-end.main')

@section('content')
    <div id="page-1">
        <div id="{{trans('app.about')}}">
            <div id="elektroMarkt">
                <h4 class="logo-title">{{trans('app.inspired_by')}} </h4>
                <div id="elektroMarktLogo"></div>
            </div>
            <div id="mainTitle">
                {{trans('app.main_title')}}
            </div>
            <div id="mainTitleDescription">{{trans('app.header_description')}}</div>
        </div>
    </div>

    <div id="page-2">
        <div id="{{trans('app.rooms')}}">
            <div id="elektroMarkt">
                <h4 class="logo-title">{{trans('app.inspired_by')}} </h4>
                <div id="elektroMarktLogo"></div>
            </div>
            <div id="mainTitle">
                {{trans('app.main_title')}}
            </div>
            <div id="mainTitleDescription">{{trans('app.header_description')}}</div>
        </div>
    </div>


        {{--<div id="page-3">--}}
            {{--<div id="elektroMarkt">--}}
                {{--<h4 class="logo-title">{{trans('app.inspired_by')}} </h4>--}}
                {{--<div id="elektroMarktLogo"></div>--}}
            {{--</div>--}}
            {{--<div id="mainTitle">--}}
                {{--{{trans('app.main_title')}}--}}
            {{--</div>--}}
            {{--<div id="mainTitleDescription">{{trans('app.header_description')}}</div>--}}
        {{--</div>--}}
@endsection

