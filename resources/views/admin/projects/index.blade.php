@extends('layouts.admin')

@section('content')

<div class="projects container">
    <h1 class="mb-3">I miei progetti</h1>

    <table class="table mt-4">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Link</th>
            <th scope="col">Altri sviluppatori</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)

            <tr>
              <td>{{$project->title}}</td>
              <td>{{$project->description}}</td>
              <td>{{$project->github_link}}</td>
              <td>{{$project->other_developers}}</td>
              <td>
                <a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}"><i class="fa-solid fa-eye"></i></a>
              </td>
            </tr>
            @endforeach

        </tbody>
      </table>
      {{$projects->links()}}

      <a class="btn btn-success mt-3" href="{{route('admin.projects.create')}}">Inserisci un nuovo progetto</a>
</div>
@endsection
