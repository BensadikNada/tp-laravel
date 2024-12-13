<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout.app')
    @section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>List of books</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-secondary" href="{{ route('book.create')}}">Ajouter</a>
        </div>
    </div>
    <form class="d-flex" name="form1">
        <input class="form-control me-4" type="search" placeholder="Search" name="search" id="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">Genre</th>
            <th scope="col">Author</th>
            <th scope="col">Prix</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $books as $book )
            <tr>
                <th>{{ $book->idBook }}</th>
                <th>{{ $book->titre }}</th>
                <th>{{ $book->genre }}</th>
                <th>{{ $book->author }}</th>
                <th>{{ $book->prix }}</th>
                <th>
                    <a href="{{ route('book.show', $book->idBook) }}" class="btn btn-info">Details</a>
                    <form action="{{ route('book.destroy', $book->idBook) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </th>
            </tr>

          @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>
