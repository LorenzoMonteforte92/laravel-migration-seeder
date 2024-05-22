@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap gap-3 p-5">
                @foreach ($trains as $train)
                    <div class="card" style="width: calc(100% / 5 - 1rem);">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{ $train->company }}</h5>
                            <p class="card-text">{{$train->train_number}}</p>
                            <div class="d-flex justify-content-between" >
                                <small>{{ $train->origin}}</small>
                                <small>{{ $train->destination}}</small>
                            </div>
                            <div class="d-flex justify-content-between" >
                                <small>{{$train->departure_time}}</small>
                                <small>{{$train->arrival_time}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection