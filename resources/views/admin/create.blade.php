@extends('admin.main')

@section('content')

        {!! Form::open(
            ['url' => route('app.' . $tableName . '.store')]
         )!!}

        @foreach($fields as $field)

            @if($field == 'languages_id')

                <div class="form-group">
                    {!! Form::label($field, 'Choose ' . ucfirst(substr($field, 0, -4) . ':')) !!}
                    {{Form::select($field ,$languages, '', ['class' => 'form-control'])}}<br/>
                </div>

            @elseif($field == 'id')
                <div class="form-group">
                    {!! Form::label('$field', 'Enter ' . $field) !!}
                    {!! Form::text('id', '', ['class' => 'form-control']) !!}

                </div>

            @elseif($field == 'categories_id')
                <div class="form-group">
                    {!! Form::label($field, 'Choose ' . ucfirst(substr($field, 0, -4) . ':')) !!}
                    {{Form::select($field ,$categories, '', ['class' => 'form-control'])}}<br/>
                </div>

            @else
                <div class="form-group">
                    {!! Form::label('$field', 'Enter ' . $field) !!}
                    {!! Form::text($field, '', ['class' => 'form-control']) !!}
                </div>

            @endif

        @endforeach

        {!! Form::submit('Create' , ['class' => 'btn btn-sm btn-success']) !!}
        <a class="btn btn-sm btn-primary" href="{{route('app.' . $tableName . '.index')}}">Back to list</a>


        {!! Form::close() !!}


@endsection