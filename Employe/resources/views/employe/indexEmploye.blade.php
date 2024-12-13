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
    <div class="row">
        <div class="col-lg-11">
        <h2>Liste des employés</h2>
        </div>
        <div class="col-lg-1">
        <a class="btn btn-success" href="{{ route('employe.create')}}">Ajouter</a>
        </div>
    </div>
    {{-- <form class="d-flex" name="form1">
        <input class="form-control me-4" type="search" placeholder="Search" name="search1" id="search1" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <label> ville: </label>
        <select name="search1" id="search1" onchange="form1.submit()">
            <option value="" disabled selected>poste</option>
            @foreach ($Templ as $VI )
            <option>{{ $VI->poste }}</option>
            @endforeach
        </select>
    </form> --}}
    {{-- <form class="d-flex" method="GET" name="formSearch">
        <input class="form-control me-2" type="search" placeholder="Recherche par nom" name="search1" id="search1" aria-label="Search">
        <select class="form-control me-2" name="search2" id="search2">
            <option value="">Toutes les sociétés</option>
            @foreach ($Lemployes as $sc)
                <option value="{{ $sc->Societe }}">{{ $sc->Societe }}</option>
            @endforeach
        </select>
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
    </form> --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>poste</th>
        <th>societe</th>
        <th>Salaire</th>
        <th>Actions</th>
        </tr>
        @foreach ($employes as $index => $employe)
        <tr>
        <td>{{ $index+1 }}</td>
        <td>{{ $employe->nom }}</td>
        <td>{{ $employe->poste }}</td>
        <td>{{ $employe->Societe }}</td>
        <td>{{ $employe->Salaire }}</td>
        <td>
            <form action="{{ route('employe.destroy', $employe->id) }}"
                method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-info" href="{{ route('employe.show', $employe->id) }}">Voir</a>
                <a class="btn btn-primary" href="{{ route('employe.edit', $employe->id ) }}">Modifier</a>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
        </tr>
        @endforeach
    </table>
    @endsection
</body>
</html>
