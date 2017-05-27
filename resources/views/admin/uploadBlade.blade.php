@extends('admin.main')

@section('content')

    @foreach($resource as $img)

        <a href="#"><img src="{{URL::asset($img['path'])}}" /></a>
    @endforeach


    @foreach($categories as $category)

        {{--{{$category['id']}}--}}

        {{$category['categories_translations']['name']}}
    @endforeach

    <div class="container">
        <div class="col-md-12">

        {!! Form::open(
            ['route' => 'app.resource.resourceStore',
             'class' => 'form',
             'novalidate' => 'novalidate',
             'files' => true]
             ) !!}

        <div class="form-group">
            {!! Form::label('Product Image') !!}
            {!! Form::file('image', null) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Product!') !!}
        </div>
        {!! Form::close() !!}

        </div>

    </div>

@endsection