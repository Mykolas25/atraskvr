@extends ('admin.main')

@section('header')
    <h3> Content management page</h3>
@endsection

@section('content')

            {{--<h3>Create new: {{substr($tableName, 0, -1)}}</h3>--}}

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


            @if(isset($mediaFilesShow))
                @foreach($mediaFilesShow as $pagedata)
                    @foreach($pagedata['pages_connected_images'] as $pagesConnectedImages)
                        <div class="col-md-2"><img src="{{URL::asset($pagesConnectedImages['resources_connected_images']['path'])}}" alt="Forest" width="80" height="160"/></div>
                        @endforeach
                    @endforeach
            @endif


            {{--{{dd($coverImageShow)}}--}}
            {{--Show the list of pages--}}
                @if(isset($pagesShow))
                    {{--{{dd($pagesShow)}}--}}

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
                            <div class="col-md-2"> <a class="btn btn-primary" href="{{route('app.pages.mediaFiles', $pagedata['id'])}}">Related media files</a></div>
                            {{--@foreach($pagedata['pages_connected_images'] as $pagesConnectedImages)--}}
                                {{--<div style="float: left;"><img src="{{URL::asset($pagesConnectedImages['resources_connected_images']['path'])}}" alt="Forest" width="80" height="160"/></div>--}}
                            {{--@endforeach--}}
                        </div>
                    </div>
                    @endforeach
                @endif
            {{--Create new page --}}
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

                            @elseif($field=='title')
                                <div class="form-group">
                                    {!! Form::label($field, 'Enter ' . ucfirst($field . ':')) !!}
                                    {!! Form::text($field, '', ['class' => 'form-control'])!!}<br/>
                                </div>

                        {{--pages categories input--}}
                        {{--@elseif(isset($checkbox[$field]))--}}
                            {{--{!! Form::label($field, 'Pick ' . ucfirst($field . ':')) !!}<br/>--}}
                            {{--@foreach($checkbox[$field] as $key => $checkboxItem)--}}
                                {{--{{Form::checkbox($field.'[]', $key)}}--}}
                                {{--<span @if($key == $cache) style="font-weight:700" @endif>--}}
                                    {{--{{Form::label($checkboxItem, $checkboxItem)}}</span><br/>--}}
                            {{--@endforeach<br/>--}}

                        {{--password input--}}
                        {{--@elseif($field == 'password')--}}
                            {{--<div class="form-group">--}}
                                {{--{!! Form::label($field, 'Enter ' . ucfirst($field . ':')) !!}--}}
                                {{--{!! Form::password($field, ['class' => 'form-control'])!!}<br/>--}}
                            {{--</div>--}}

                        {{--@elseif($field)--}}
                            {{--<div class="form-group">--}}
                                {{--{!! Form::label($field, 'Enter ' . ucfirst($field . ':')) !!}--}}
                                {{--{!! Form::text($field, '', ['class' => 'form-control'])!!}<br/>--}}
                            {{--</div>--}}

                    @endif
                @endforeach

            <div class="standardDiv">
                {!! Form::label('Upoad Image (Select one or more images using Crl+ML)') !!}
                {!! Form::file('images[]', array('multiple'=>true)) !!}
            </div>

            <div  class="standardDiv">{!! Form::submit('Create' , ['class' => 'btn btn-success']) !!}
                <a class="btn btn-primary" href="{{ route('app.' . $tableName . '.index') }}">{{ucfirst($tableName)}} list</a>
            </div>
            {!! Form::close() !!}
            @endif
@endsection
