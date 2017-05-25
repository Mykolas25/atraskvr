@extends('admin.main')

@section('content')

    <div class="container">
        <div class="col-md-12">

        {!! Form::open(
            array(
                'route' => 'app.resource.store',
                'class' => 'form',
                'novalidate' => 'novalidate',
                'files' => true)) !!}
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