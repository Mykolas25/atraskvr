@extends('mainPages')

{{--{{dd($resource)}}--}}

{{--@section('content')--}}



@foreach($resource as $img)

    <a href="#"><img src="{{URL::asset($img['path'])}}" /></a>
@endforeach


@foreach($categories as $category)

    {{--{{$category['id']}}--}}

    {{$category['categories_translations']['name']}}
@endforeach



{{--@section('content')--}}
