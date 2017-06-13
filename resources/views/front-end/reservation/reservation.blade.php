@extends('front-end.reservation.mainReservation')

@section('content')
    Please select the date of your reservation

    <div id="mainReservationDates" class="col-md-12">
        <div class="row">
            @foreach($days as $day)
                    <div id=reservationDates class="col-md-4">
                        <div class="page-item @if($date_from_url == $day) {{'active'}} @endif ">
                            <a class="page-link" href="{{route('app.usersReservations.create', $day)}}">{{$day}}</a>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>


        <form method="POST" action="{{route('app.usersReservations.store')}}">
            <h4 id="accordion" role="tablist" aria-multiselectable="true">
                @if(isset($message))
                    @if(substr($message, -1) == '!')
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                    @else
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                @endif
            </h4>

                @foreach($days as $day)
                    @if($day == $date_from_url)

                        <div class="displayChosenDate">
                            <h4> Your selected date: <br> {{$day}}</h4>
                        </div>

                        @if(isset($experiences))
                            @foreach($experiences as $experience)
                                @if($experience['pages_categories_id'] == 'vr_categories_id' && $experience['translations'] != null)
                                <div class="col-md-12">
                                    <div class="row">
                                        <div id = "experiencesDropdown" class="col-md-5">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                           href="#{{str_replace(' ', '_', $experience['translations'][0]['title'])}}"
                                                           aria-expanded="true"
                                                           aria-controls="{{str_replace(' ', '_', $experience['translations'][0]['title'])}}">
                                                            {{$experience['translations'][0]['title']}}
                                                        </a>
                                                    </h5>
                                                </div>
                                            <div id="{{str_replace(' ', '_', $experience['translations'][0]['title'])}}"
                                                 class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-block">
                                                    @if($day == $today)
                                                        @if(isset($disabledTimes))
                                                            @foreach($disabledTimes as $key => $value)
                                                                @if($key % 6 == 0)<br>
                                                                @endif
                                                                <input type="checkbox" name="{{$experience['id'] . '[]'}}"value="{{$day . ' ' . $value}}"{{'disabled'}}>
                                                                    {{$value}}
                                                            @endforeach
                                                        @endif

                                                        @foreach($enabledTimes as $key => $value)
                                                            @if($key % 6 == 0)<br>
                                                            @endif
                                                            <input type="checkbox" name="{{$experience['id'] . '[]'}}" value="{{$day . ' ' . $value}}"

                                                                @if(isset($reservations))
                                                                    @foreach($reservations as $reservation)
                                                                        @foreach($reservation['time'] as $time)
                                                                            @if($time == $day . ' ' . $value && $experience['id'] == $reservation['pages_id'])
                                                                                {{'disabled'}}
                                                                                    @endif
                                                                                @endforeach
                                                                            @endforeach
                                                                        @endif
                                                                         >
                                                                    {{$value}}
                                                        @endforeach

                                                    @elseif($day != $today)
                                                        @foreach($times as $key => $value)
                                                            @if($key % 6 == 0)
                                                                <br>
                                                            @endif
                                                            <input type="checkbox" name="{{$experience['id'] . '[]'}}"
                                                                   value="{{$day . ' ' . $value}}"

                                                                @if(isset($reservations))
                                                                    @foreach($reservations as $reservation)
                                                                        @foreach($reservation['time'] as $time)
                                                                            @if($time == $day . ' ' . $value && $experience['id'] == $reservation['pages_id'])
                                                                                {{'disabled'}}
                                                                            @endif
                                                                        @endforeach
                                                                    @endforeach
                                                                @endif
                                                            >{{$value}}

                                                        @endforeach

                                                    @endif

                                                    @endif {{--close condition if $experience['pages_categories_id'] == 'vr_categories_id'--}}
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endif
                @endforeach
            {{csrf_field()}}

            <div class="col-md-12">
                    <div class="row">
                        <input id="reservationSubmitButton" class="btn btn-outline-primary submit-button" type="submit">
                    </div>
                </div>
            </div>
        </form>
@endsection


