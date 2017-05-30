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

        @foreach($resource as $img)
            <div class="col-md-3">
                <div class="gallery">
                        <a href="#"><img src="{{URL::asset($img['path'])}}" alt="Forest" width="600" height="400"/></a>
                    {{--<div class="desc">Add a description of the image here</div>--}}
                </div>
                {!! Form::checkbox('name', 'value') !!}
            </div>
        @endforeach
@endsection

{{--@foreach($fields as $field)--}}
        {{--{{$id}}--}}

{{--@endforeach--}}

    {{--{!! Form::label($field, 'Pick ' . ucfirst($field . ':')) !!}<br/>--}}

    {{--@foreach($checkbox[$field] as $key => $checkboxItem)--}}

        {{--{{Form::checkbox($field.'[]', $key)}}--}}

        {{--{{Form::label($checkboxItem, $checkboxItem)}}<br/>--}}

    {{--@endforeach<br/>--}}