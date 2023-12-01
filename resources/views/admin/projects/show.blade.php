@extends('layouts.admin')

@section('content')

<div class="show container">

    <h1>{{$project->title}}</h1>
    <div class="img-container w-50">

        <img class="img-fluid" src="{{asset('storage/' . $project->image)}}" alt="{{$project->title}}">

        <p>{{$project->image_original_name}}</p>
    </div>
    <p>{!! $project->description !!}</p>
</div>
@endsection
