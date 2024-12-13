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
    <h1>Modifier employé</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('employe.update', $employe->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group mb-3">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom"placeholder="Entrer Nom" name="nom" value="{{ $employe->nom }}">
        </div>
        <div class="form-group mb-3">
            <label for="prénom">poste:</label>
            <input type="text" class="form-control" id="poste" placeholder="Entrer poste" name="poste" value="{{ $employe->poste}}">
        </div>
        <div class="form-group mb-3">
            <label for="company">Societe:</label>
            <input type="text" class="form-control" id="societe" placeholder="Entrer societe" name="Societe" value="{{ $employe->Societe}}">
        </div>
        <div class="form-group mb-3">
            <label for="fortune">SALAIRE (DH):</label>
            <input type="number" class="form-control" id="Salaire" placeholder="Salaire" name="Salaire" value="{{ $employe->Salaire }}">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    @endsection
</body>
</html>
