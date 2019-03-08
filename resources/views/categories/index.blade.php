@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Categorie</h1>
        <a href="{{ route ('categories.create') }}" class="btn btn-primary">Crea</a>
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Slug</th>
              <th>Edit</th>
              <th>Visualizza</th>
              <th>Elimina</th>
            </tr>
          </thead>

          <tbody>
            @forelse ($categories as $category)
              <tr>
                <td>{{ $category->id}}</td>
                <td>{{ $category->name}}</td>
                <td>{{ $category->slug}}</td>
                <td>{{ $category->edit}}</td>
                <td>
                  <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Modifica</a>
                </td>
                <td>
                  <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">Visualizza</a>
                </td>
                <td>
                  <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="" value="elimina" class="btn btn-danger">
                  </form>
                </td>
              </tr>
            @empty

              <p>non ci sono categorie</p>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
