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
</div>

{{--About--}}
<div id="mainAbout">
    <div id="{{trans('app.about')}}">
    <div id="mainTitle">
    {{trans('app.about')}}
    </div>
        <div id="aboutDescription">

           @if(isset($video))
               <div id="aboutVideo">
                   <video id="my-video" class="video-js" controls preload="auto"
                          poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                       <source src="{{asset($video[0])}}" type='video/mp4'>
                       {{--<source src="MY_VIDEO.webm" type='video/webm'>--}}
                       <p class="vjs-no-js">
                           To view this video please enable JavaScript, and consider upgrading to a web browser that
                           <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                       </p>
                   </video>
               </div>
                @elseif(isset($image))
                <img style="width:70px" src={{asset($image['0'])}}>
            @endif

        </div>
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

{{--contacts--}}
<div id="mainContacts">
    <div id="{{trans('app.contacts')}}">
        <div id="mainTitle">
            {{trans('app.contacts')}}
        </div>
    </div>
</div>

{{--tickets--}}
<div id="mainTickets">
    <div id="{{trans('app.tickets')}}">
        <div id="mainTitle">
            {{trans('app.tickets')}}
        </div>
    </div>
</div>

{{--sponsors--}}
<div id="mainSponsors">
    <div id="{{trans('app.sponsors')}}">
        <div id="mainTitle">
            {{trans('app.sponsors')}}
        </div>
    </div>
</div>

{{--time and location--}}
<div id="mainTimeLocation">
    <div id="{{trans('app.time-and-location')}}">
        <div id="mainTitle">
            {{trans('app.time-and-location')}}
        </div>
    </div>
</div>

@endsection

