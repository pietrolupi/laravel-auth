@extends('layouts.admin')

@section('content')

<div class="show container">

    <h1>{{$project->title}}</h1>
    <div class="img-container">
        <img src="{{$project->image}}" alt="{{$project->title}}">
    </div>
    <p>{{$project->description}}</p>
</div>
@endsection
