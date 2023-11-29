@extends('layouts.admin')

@section('content')

<div class="types container">

    <h1>Tipologie di lavoro</h1>
    <form action="{{route('admin.types.store')}}" method="POST" >
        @csrf

        <div class="input-group mb-3">

            <input type="text" class="form-control" id="name" name="name" placeholder="Aggiungi nuova tipologia">

            <div class="input-group-append">
              <button class="btn btn-success" type="submit">Aggiungi Nuova Tipologia </button>
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
            @foreach ($types as $type)

            <tr>
              <td>{{$type->name}}</td>

              <td>
                <form
                action="{{route('admin.types.destroy', $type)}}"
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
