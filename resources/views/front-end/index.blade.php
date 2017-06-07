@extends('front-end.main')

@section('content')
<div class="container-fluid">
    <div id="page-1">
        <div id="{{trans('app.main')}}">
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


{{--About--}}

<div id="mainAbout">
    <div id="{{trans('app.about')}}">
        <div id="">
        </div>
    <div id="mainTitle">
    {{trans('app.about')}}
    </div>
</div>


{{--Virtual rooms--}}
<div id="{{trans('app.rooms')}}">
    <div id="VRRooms">
            <div id="mainTitle">
                {{--{{trans('app.main_title')}}--}}
            </div>

        @foreach($pages as $page)
            {{--{{dd($page['resource_image']['path'])}}--}}
                @if(isset($page['pages_categories_id']) && isset($page['resource_image']['path']) &&  $page['pages_categories_id']== 'vr_categories_id')
                    <div class="experience">
                        <div class="experienceImage">
                            <img src="{{asset($page['resource_image']['path'])}}">
                        </div>
                        @foreach($page['translations'] as $translations)
                            <div class="description">
                                {{$translations['description_long']}}
                                {{$translations['description_short']}}
                            </div>
                        @endforeach
                    </div>
                @endif
        @endforeach
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

