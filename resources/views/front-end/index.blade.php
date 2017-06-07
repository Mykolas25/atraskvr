@extends('front-end.main')

@section('content')
<div class="container-fluid">
    <div id="page-1">
        <div id="{{trans('app.about')}}">
            <div id="elektroMarkt">
                <h4 class="logo-title">{{trans('app.inspired_by')}} </h4>
                <div id="elektroMarktLogo"></div>
            </div>
            <div id="mainTitle">
                {{trans('app.main_title')}}
            </div>
            {{--<div id="mainTitleDescription">{{trans('app.header_description')}}</div>--}}
        </div>
    </div>

{{--Virtual rooms--}}
<div id="{{trans('app.rooms')}}">
    <div id="VRRooms">
            <div id="mainTitle">
                {{--{{trans('app.main_title')}}--}}
            </div>

            <div class="experience">
                <div class="experienceImage">
                    <img src="{{URL::asset('/images/the-lab-on-steam-archery.jpg')}}">
                </div>

                <div class="description">

                <div>

            </div>
        </div>
</div>

    <div id="page-3">
        <div id="{{trans('app.contacts')}}">
            <div id="rooms">
                <h4 class="logo-title">{{trans('app.rooms_title')}} </h4>
                {{--<div id="elektroMarktLogo"></div>--}}
            </div>
            <div id="mainTitle">
                {{--{{trans('app.main_title')}}--}}
            </div>

        </div>
    </div>
    </div>
    </div>
</div>

{{--<div id="page-4">--}}
    {{--<div id="{{trans('app.tickets')}}">--}}
        {{--<div id="elektroMarkt">--}}
            {{--<h4 class="logo-title">{{trans('app.inspired_by')}} </h4>--}}
            {{--<div id="elektroMarktLogo"></div>--}}
        {{--</div>--}}
        {{--<div id="mainTitle">--}}
            {{--{{trans('app.main_title')}}--}}
        {{--</div>--}}

    {{--</div>--}}

    {{--<div id="{{trans('app.time-and-locations')}}">--}}
        {{--<div id="elektroMarkt">--}}
            {{--<h4 class="logo-title">{{trans('app.inspired_by')}} </h4>--}}
            {{--<div id="elektroMarktLogo"></div>--}}
        {{--</div>--}}
        {{--<div id="mainTitle">--}}
            {{--{{trans('app.main_title')}}--}}
        {{--</div>--}}

    {{--</div>--}}
@endsection

