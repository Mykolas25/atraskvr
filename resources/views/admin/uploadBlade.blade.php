@extends('admin.main')

@section('header')
@if(isset($resource))
    <h1> Resources Gallery </h1>
@endif
@endsection

@section('content')

{{--createing new image --}}
        {!! Form::open(
            ['route' => 'app.resource.resourceStore','files' => true]
        ) !!}

        <div class="form-group">
            {!! Form::label('Add image here (Select one or more files)') !!}
            {!! Form::file('images[]', array('multiple'=>true)) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Submit file!') !!}
        </div>

{{--image gallery display--}}
<div class="col-md-6">
        @foreach($resource as $img)
            <div class="col-md-3">
                <div class="gallery">
                    @if($img['mime_type'] == "image/jpeg")
                        <a href="#"><img src="{{URL::asset($img['path'])}}" alt="Forest" width="600" height="400"/></a>
                     @endif
                </div>
                {!! Form::checkbox('name', 'value') !!}
            </div>
        @endforeach
</div>

<div class="col-md-6">
    <div class="gallery">
        <div class="col-md-3">
        @if($img['mime_type'] == "video/mp4")
            <div class="embed-responsive embed-responsive-4by3" style="width:600px; height:400px">
                <iframe class="embed-responsive-item" src="{{URL::asset($img['path'])}}" ></iframe>
            </div>
        @endif
        <div>
    <div>
<div>
@endsection

{{--@foreach($fields as $field)--}}
        {{--{{$id}}--}}

{{--@endforeach--}}

    {{--{!! Form::label($field, 'Pick ' . ucfirst($field . ':')) !!}<br/>--}}

    {{--@foreach($checkbox[$field] as $key => $checkboxItem)--}}

        {{--{{Form::checkbox($field.'[]', $key)}}--}}

        {{--{{Form::label($checkboxItem, $checkboxItem)}}<br/>--}}

    {{--@endforeach<br/>--}}