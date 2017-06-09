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
               @if(isset($aboutMedia['video']))
                    <div id="aboutVideo">
                        <video id="my-video" class="video-js" controls preload="auto"
                        {{--poster="{{asset('images/the-lab-on-steam-archery.jpg')}}" data-setup="{}">--}}
                            <source src="{{asset($aboutMedia['video'][0])}}" type='video/mp4'>
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

           @foreach($pages as $page)
               @if(isset($page['pages_categories_id']) && $page['name']=='Apie')
                   @foreach($page['translations'] as $translations)
                      <div id="aboutText">
                         <p>{{$translations['description_long']}}</p>
                      </div>
               @endforeach

               @endif
           @endforeach
        </div>
    </div>
</div>


{{--Virtual rooms--}}
<div id="{{trans('app.rooms')}}">
    <div id="VRRooms">
            <div id="mainTitleRooms">
                <div id="mainTitle">
                    {{--{{trans('Virtualus kambariai')}}--}}
                </div>
            </div>
            @foreach($pages as $page)
                @foreach($pagesLang as $translations)
                @if($page['id'] == $translations['pages_id'])
                    @if(isset($page['pages_categories_id']) && isset($page['resource_image']['path']) &&  $page['pages_categories_id']== 'vr_categories_id')
                        <div id="mainMainExperience">
                        <div class="experience">



                                <div id="mainExperiences">
                                    <div id = "experienceName">
                                        <div id="{{trans($translations['title'])}}">
                                            <p>{{$translations['title']}}</p>
                                        </div>
                                    </div>
                        @foreach($page['translations'] as $translations)
                            <div id="descriptionMain">
                                <div class="description">
                                    {{$translations['description_short']}}
                                </div>
                            </div>

                        @endforeach
                            <div class="experienceImage">
                                <img src="{{asset($page['resource_image']['path'])}}">
                            </div>


                          </div>
                        </div>
                        @endif
                    @endif
            @endforeach
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

