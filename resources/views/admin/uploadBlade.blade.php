@extends('admin.main')

@section('content')

    {{--createing new image --}}
    <div class="col-md-12">

        {!! Form::open(
            ['route' => 'app.resource.resourceStore','files' => true]
        ) !!}

        <div class="form-group">
            {!! Form::label('Add image here') !!}
            {!! Form::file('image', null) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit file!') !!}
        </div>
        {!! Form::close() !!}

    </div>

    {{--image gallery display--}}

    <div class="col-md-12">

    @foreach($resource as $img)
        <div class="col-md-3">
            <div class="gallery">
                    <a href="#"><img src="{{URL::asset($img['path'])}}" alt="Forest" width="600" height="400"/></a>
                {{--<div class="desc">Add a description of the image here</div>--}}
            </div>
            {!! Form::checkbox('name', 'value') !!}<br/>
        </div>
    @endforeach
    </div>

@endsection

{{--@foreach($fields as $field)--}}
        {{--{{$id}}--}}

{{--@endforeach--}}

    {{--{!! Form::label($field, 'Pick ' . ucfirst($field . ':')) !!}<br/>--}}

    {{--@foreach($checkbox[$field] as $key => $checkboxItem)--}}

        {{--{{Form::checkbox($field.'[]', $key)}}--}}

        {{--{{Form::label($checkboxItem, $checkboxItem)}}<br/>--}}

    {{--@endforeach<br/>--}}