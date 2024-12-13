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
    <form method="POST" action="{{ route('book.index') }}">
        @csrf
        <div class="mb-3">
          <labelclass="form-label">Titre</labelclass=>
          <input type="text" class="form-control" id="titre" name="titre">
        </div>
        <div class="mb-3">
          <label class="form-label">Genre</label>
          <input type="text" class="form-control" id="genre" name="genre">
        </div>
        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    @endsection
</body>
</html>
