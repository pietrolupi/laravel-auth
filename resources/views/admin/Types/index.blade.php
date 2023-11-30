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

    @include('admin.partials.error_or_success')




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

                @include('admin.partials.form_delete', ['route' => route('admin.types.destroy', $type),
                 'message' => 'Vuoi davvero procedere ad eliminare permanentemente questa tipologia?'])

              </td>
            </tr>
            @endforeach

        </tbody>
      </table>
</div>



@endsection
