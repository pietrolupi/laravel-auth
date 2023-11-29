@extends('layouts.admin')

@section('content')

<div class="technologies container">

    <h1>Elenco Tencologie Utilizzate</h1>
    <form action="{{route('admin.technologies.store')}}" method="POST" >
        @csrf

        <div class="input-group mb-3">

            <input type="text" class="form-control" id="name" name="name" placeholder="Aggiungi nuova tecnologia">

            <div class="input-group-append">
              <button class="btn btn-success" type="submit">Aggiungi Nuova Tecnologia </button>
            </div>
          </div>

    </form>

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{session('error')}}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif




    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)

            <tr>
              <td>{{$technology->name}}</td>

              <td>
                <form
                action="{{route('admin.technologies.destroy', $technology)}}"
                method="POST"
                onsubmit="return confirm('Vuoi davvero procedere ad eliminare permanentemente questa tecnologia?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                </form>
              </td>
            </tr>
            @endforeach

        </tbody>
      </table>
</div>

@endsection
