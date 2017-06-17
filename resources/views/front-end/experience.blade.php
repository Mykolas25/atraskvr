@extends('front-end.main')

@section('content')

    @foreach($pages as $page)
            @foreach($pagesLang as $translations)
                    @if($page['id'] == $translations['pages_id'])
                        @if($translations['slug'] == $slug)
                        @if(isset($page['pages_categories_id']) && isset($page['resource_image']['path']) &&  $page['pages_categories_id']== 'vr_categories_id')
                            {{--navigating from menu ropdown on click --}}
                            <div id="{{trans($translations['slug'])}}">
                                <div id="experiencesMain">
                                    {{--counting loops for interchannging colors in experiance div--}}
                                    @if($loop->iteration %2 == 0)
                                        <div class="experienceWhite">
                                            @else
                                                <div class="experienceBlack">
                                                    @endif
                                                    <div id="descriptionMain">
                                                        <div class="description">
                                                            <div id="experienceName">
                                                                <p>{{$translations['title']}}</p>
                                                            </div>
                                                            {{$translations['description_long']}}
                                                        </div>
                                                    </div>
                                                    <div class="experienceImage">
                                                        <a href=""><img src="{{asset($page['resource_image']['path'])}}"></a>
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                        @endif
                    @endif
                @endif
            @endforeach
    @endforeach
    {{--<div class="container-fluid">--}}
        {{--<div id="page-1">--}}
            {{--<div id="{{trans('app.main')}}">--}}
                {{--<div id="elektroMarkt">--}}
                    {{--<h4 class="logo-title">{{trans('app.inspired_by')}} </h4>--}}
                    {{--<div id="elektroMarktLogo"></div>--}}
                {{--</div>--}}
                {{--<div id="mainTitle">--}}
                    {{--{{trans('app.main_title')}}--}}
                {{--</div>--}}
                {{--<div id="mainTitleDescription">{{trans('app.header_description')}}</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection