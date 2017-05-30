@extends ('admin.main')

@section('header')
    @if(isset($mediaFilesShow))
        <h1> Related media content</h1>
    @elseif(isset($pagesShow))
        <h1> List of pages</h1>
    @elseif(isset($fields))
        <h1> Create page </h1>
    @elseif(!isset($mediaFilesShow) && !isset($pagesShow)&& !isset($fields))
        <div class="introDiv">
            <h1>Welcome to the administrator page</h1>
        </div>

    @endif
@endsection

@section('content')

{{--error messages--}}

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

{{--Show intro index file to admin when nothing is clicked--}}

            @if(!isset($mediaFilesShow) && !isset($pagesShow)&& !isset($fields))

                <div class="adminIndexWallpaper">
                    <img src="http://wallpaperpulse.com/img/751396.jpg">
                </div>

            @endif

{{--Show related/connected media files--}}
            @if(isset($mediaFilesShow))
                @foreach($mediaFilesShow as $mediaFiles)
                    @foreach($mediaFiles['pages_connected_images'] as $mediaFile)
                        <div class="col-md-2"><img src="{{URL::asset($mediaFile['resources_connected_images']['path'])}}" alt="Forest" width="80" height="160"/></div>
                        @endforeach
                    @endforeach
            @endif

 {{--Show the list of pages--}}
            @if(isset($pagesShow))

                <div class="createPageButton">
                    <a class="btn btn-primary" href="{{route('app.pages.create')}}">Create New Page</a>
                </div>

                <div class="header">
                   <div class="col-md-12">
                       {{--<div class="col-md-2">count</div>--}}
                       <div class="col-md-2">id</div>
                       <div class="col-md-2">Category</div>
                       <div class="col-md-2">Cover image id</div>
                       <div class="col-md-2">Cover image path</div>
                       <div class="col-md-2">Cover Image</div>
                   </div>
                </div>

                @foreach($pagesShow as $pagedata)

                <div class="grid">
                    <div class="col-md-12">
                        {{--<div class="col-md-2">{{$pagedata['count']}}</div>--}}
                        <div class="col-md-2">{{$pagedata['id']}}</div>
                        <div class="col-md-2">{{$pagedata['pages_categories_id']}}</div>
                        <div class="col-md-2">{{$pagedata['cover_image_id']}}</div>
                        <div class="col-md-2">{{$pagedata['resource_image']['path']}}</div>
                        <div class="col-md-2"> <img src="{{URL::asset($pagedata['resource_image']['path'])}}" alt="Forest" width="80" height="160"/></div>
                        <div class="col-md-2"> <a class="btn btn-primary" href="{{route('app.pages.mediaFiles', $pagedata['id'])}}">Media files</a></div>
                        <div class="col-md-2"> <a class="btn btn-success" href="{{route('app.pages.edit', $pagedata['id'])}}">Edit</a></div>
                        <div class="col-md-2"> <a class="btn btn-warning" href="{{route('app.pages.delete', $pagedata['id'])}}">Delete</a></div>
                    </div>
                </div>

                @endforeach
            @endif

{{--Show Create new page --}}
            @if(isset($tableName))

                {!! Form::open(['url' => route('app.' . $tableName . '.store'), 'files' => true]) !!}

                @foreach($fields as $field)

                        @if(isset($dropdown) and substr($field, -3) == '_id')

                        {{--pages categories input/cover image input/pages Languages input--}}
                            <div class="form-group">
                                {!! Form::label($field, 'Choose ' . ucfirst(substr($field, 0, -3) . ':')) !!}
                        {{--{{dd($dropdown)}}--}}
                                {{Form::select($field ,$dropdown[$field], '', ['class' => 'form-control'])}}<br/>
                            </div>

                        {{--description input--}}
                            @elseif($field == 'description_long' || $field == 'description_short')
                                <div class="form-group">
                                    {!! Form::label($field, 'Enter ' . ucfirst($field . ':')) !!}
                                    {!! Form::textarea($field, '', ['class' => 'form-control'])!!}<br/>
                                </div>

                        {{--title input--}}
                            @elseif($field=='title')
                                <div class="form-group">
                                    {!! Form::label($field, 'Enter ' . ucfirst($field . ':')) !!}
                                    {!! Form::text($field, '', ['class' => 'form-control'])!!}<br/>
                                </div>

                            @endif
                @endforeach

                <div class="standardDiv">
                    {!! Form::label('Upoad Image (Select one or more images using Crl+ML)') !!}
                    {!! Form::file('images[]', array('multiple'=>true)) !!}
                </div>

                <div  class="standardDiv">{!! Form::submit('Create' , ['class' => 'btn btn-success']) !!}
                    <a class="btn btn-primary" href="{{ route('app.' . $tableName . '.show') }}">{{ucfirst($tableName)}} list</a>
                </div>
                {!! Form::close() !!}

            @endif
@endsection

@section('script')
    <script>

{{--Ajax script for delete function--}}
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
