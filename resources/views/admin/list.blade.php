@extends('admin.main')

@section('content')

        <div class="col-md-12">
            <table class="table">
                <thead>

                <tr>

                    @foreach($list[0] as $key => $value)
                        <th>{{$key}}</th>
                    @endforeach
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Translations</th>

                </tr>
                </thead>
                <tbody>

                @foreach($list as $item)
                    <tr>

                        @foreach($item as $value)
                            <td>{{$value}}</td>
                        @endforeach
                        <td><a class="btn btn-sm btn-primary" href="">Edit</a></td>
                        <td><a class="btn btn-sm btn-danger" href="">Delete</a></td>

                    </tr>
                @endforeach


                </tbody>
            </table>
            <a class="btn btn-sm btn-success" href="{{route('app.' . $tableName . '.create')}}">Add new</a>
        </div>
@endsection