@extends('layouts.admin')

@section('content')
    <div class="edit container">
        <h1>Modifica il progetto: "{{$project->title}}"</h1>

        <form
        class="d-inline-block"
        action="{{route('admin.projects.update', $project)}}"
        method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{$project->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{$project->image}}">
            </div>
            <div class="mb-3">
                <label for="github_link" class="form-label">Link Github</label>
                <input type="text" class="form-control" id="github_link" name="github_link" value="{{$project->github_link}}">
            </div>
            <div class="mb-3">
                <label for="other_developers" class="form-label">Altri Developer</label>
                <input type="text" class="form-control" id="other_developers" name="other_developers" value="{{$project->other_developers}}">
            </div>

            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-danger">Annulla</button>

        </form>

    </div>
@endsection
