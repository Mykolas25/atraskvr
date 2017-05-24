@extends('mainPages')

{{--{{dd($categories)}}--}}
@foreach($categories as $category)

    {{--{{$category['id']}}--}}

    {{$category['categories_translations']['name']}}
@endforeach
{{--@section('content')--}}
{{--<div>Total records:{{ $totalCount  }}</div>--}}

{{--<div>Clients:</div>--}}

{{--<ul>--}}
    {{--@foreach($clients as $client)--}}
    {{--{{ $client['name'] }}--}}
    {{--<ul>--}}
        {{--@foreach ($client['projects'] as $project)--}}
        {{--<li>{{ $project['name'] }}</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
    {{--@endforeach--}}
{{--</ul>--}}
{{--@endsection--}}

{{--@section('title',trans('app.clients'))--}}