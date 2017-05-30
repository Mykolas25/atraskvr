@extends('admin.main')

@section('header')
    @if(isset($list_data))
        <h1> List of {{substr($tableName, 0)}}</h1>
    @endif
@endsection

@section('content')

    @if(isset($error))
        <div class="alert alert-danger">
            <strong>{{ $error['message'] }}</strong>
        </div>
        <a style="margin-bottom: 50px" class="btn btn-primary btn-sm" href="{{ route('app.' . $tableName . '.create') }}">Create new {{substr($tableName, 0, -1)}}</a>
        <br>
        <a class="btn btn-warning btn-md float-right" href="http://atraskvr.dev/admin/">Admin home page</a>
    @endif


    @if(!isset($error))
        @if(isset($comment))
            @if(sizeof($comment['message'] > 0))
                <div class="alert alert-warning">
                    <strong>{{ $comment['message'] }}</strong>
                </div>
            @endif
        @endif

        <div class="createPageButton">
            <a class="btn btn-primary btn-sm" href="{{ route('app.' . $tableName . '.create') }}">New {{substr($tableName, 0, -1)}}</a>
            <a class="btn btn-warning btn-md float-right" href="http://atraskvr.dev/admin/">Home</a>
        </div>
        @if(isset($translationExist))
            Translate
        @endif

{{--display langueges list--}}
    @if(isset($languages_data))
        <div class="header">
            <div class="col-md-12">
                <div class="col-md-2">id</div>
                <div class="col-md-2">name</div>
                <div class="col-md-2">action</div>
            </div>
        </div>

        <div class="grid">
            @foreach($languages_data as $record)
                <div class="col-md-12">
                    <div class="col-md-2">{{$record['id']}}</div>
                    <div class="col-md-2">{{$record['name']}}</div>
                    <div class="col-md-2"> <a class="btn btn-primary" href="{{route('app.' . $tableName . '.show', $record['id'])}}">View</a></div>
                    <div class="col-md-2"> <a class="btn btn-success" href="{{route('app.' . $tableName . '.edit', $record['id'])}}">Edit</a></div>
                    <div class="col-md-2"> <a class="btn btn-warning" href="{{route('app.' . $tableName . '.delete', $record['id'])}}">Delete</a></div>
                </div>
            @endforeach
        </div>
    @endif

{{--display categories list--}}
    @if(isset($categories_data))
        <div class="header">
            <div class="col-md-12">
                <div class="col-md-6">id</div>
                <div class="col-md-6">action</div>
            </div>
        </div>

        <div class="grid">
            @foreach($categories_data as $record)
                <div class="col-md-12">
                    <div class="col-md-6">{{$record['id']}}</div>
                    <div class="col-md-2"> <a class="btn btn-primary" href="{{route('app.' . $tableName . '.show', $record['id'])}}">View</a></div>
                    <div class="col-md-2"> <a class="btn btn-success" href="{{route('app.' . $tableName . '.edit', $record['id'])}}">Edit</a></div>
                    <div class="col-md-2"> <a class="btn btn-warning" href="{{route('app.' . $tableName . '.delete', $record['id'])}}">Delete</a></div>
                </div>
            @endforeach
        </div>
    @endif

            @if(isset($translationExist))
                <a class="btn btn-info btn-sm" href="{{route('app.' . $tableName . '_translations.create', $record['id'])}}">Translate</a>
            @endif
        </div>
    @endif
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function deleteItem(route) {
            $.ajax({
                url: route,
                type: 'DELETE',
                data: {},
                dataType: 'json',
                success: function (r) {
                    $("#" + r.id).remove();
                },
                error: function () {
                    alert('error');
                }
            });
        }
    </script>
@endsection