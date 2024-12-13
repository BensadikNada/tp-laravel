<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <h1>Ajouter un employé</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('employe.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom"placeholder="Entrez un nom" name="nom">
        </div>
        <div class="form-group mb-3">
            <label for="nom">poste :</label>
            <input type="text" class="form-control" id="poste" placeholder="Entrez un poste" name="poste">
        </div>
        <div class="form-group mb-3">
            <label for="company">Societe:</label>
            <input type="text" class="form-control" id="Societe" placeholder="societe" name="Societe">
        </div>
        <div class="form-group mb-3">
            <label for="Salaire">Salaire (DH):</label>
            <input type="number" class="form-control" id="Salaire" placeholder="Salaire" name="Salaire">
        </div>
        <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
</body>
</html>
