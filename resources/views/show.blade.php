@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h5  class="p-1 text-white">{{$project -> name}}</h5>
    <img src="{{$project -> img}}" alt="">
    <p>{{$project -> description}}</p>
    <span class="badge rounded-pill text-bg-success">Start date: {{ $project -> start_date }}</span><br>
    <span class="badge rounded-pill text-bg-danger">Start end: {{ $project -> end_date }}</span>
</div>
@endsection