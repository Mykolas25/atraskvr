@extends('admin.main')

@section('header')
    @if(isset($fields))
        <h1> Edit {{substr($tableName, 0, -1)}} contents</h1>
    @endif
@endsection

@section('content')

            @if(isset($error))
                <div class="alert alert-danger">
                    <strong>{{ $error['message'] }}</strong>
                </div>
            @endif

            @if(isset($comment))
                <div class="alert alert-success">
                    <strong>{{ $comment['message'] }}</strong>
                </div>
            @endif

            {!! Form::open(['url' => route('app.' . $tableName . '.update', $record['id'])]) !!}


            @foreach($fields as $field)

                @if($field == 'user_id')

                @elseif($field == 'cover_image_id' and $tableName == 'pages')

                    <div class="form-group">
                        {!! Form::label($field, 'Choose ' . ucfirst(substr($field, 0, -4) . ':')) !!}
                        {!! Form::file('image', ['class' => 'form-control'])!!}<br/>
                    </div>

                @elseif(isset($dropdown) and substr($field, -3) == '_id')
                    <div class="form-group">
                        {!! Form::label($field, 'Choose ' . ucfirst(substr($field, 0, -4) . ':')) !!}
                        {{Form::select($field ,$dropdown[$field], $record[$field], ['class' => 'form-control'])}}<br/>
                    </div>

                @elseif(isset($checkbox[$field]))
                    {!! Form::label($field, 'Pick ' . ucfirst($field . ':')) !!}<br/>
                    @foreach($checkbox['ingredients'] as $key => $ingridient)

                        @if (in_array($key, $pizzas_ingredients))
                            {{Form::checkbox($field.'[]', $key, true)}}
                            {{Form::label($ingridient, $ingridient)}}<br/>
                        @else
                            {{Form::checkbox($field.'[]', $key)}}
                            {{Form::label($ingridient, $ingridient)}}<br/>
                        @endif

                    @endforeach

                @elseif($field == 'password')
                    <div class="form-group">
                        {!! Form::label($field, 'Enter ' . ucfirst($field . ':')) !!}
                        {!! Form::password($field, ['class' => 'form-control'])!!}<br/>
                    </div>

                @elseif($field)
                    <div class="form-group">
                        {!! Form::label($field, 'Enter ' . ucfirst($field . ':')) !!}
                        {!! Form::text($field, $record[$field], ['class' => 'form-control'])!!}<br/>
                    </div>
                @endif

            @endforeach


            {!! Form::submit('Update' , ['class' => 'btn btn-success']) !!}
            <a class="btn btn-primary" href="{{ route('app.' . $tableName . '.show') }}">{{ucfirst($tableName)}} list</a>

            {!! Form::close() !!}


@endsection
