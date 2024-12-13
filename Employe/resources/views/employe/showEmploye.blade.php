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
    <h1>afficher détail d'un employé</h1>
    <table class="table table-bordered">
        <tr>
            <th>Nom:</th>
            <td>{{ $employe->nom }}</td>
        </tr>
        <tr>
            <th>poste:</th>
            <td>{{ $employe->poste }}</td>
        </tr>
        <tr>
            <th>Société:</th>
            <td>{{ $employe->Societe }}</td>
        </tr>
        <tr>
            <th>Salaire:</th>
            <td> {{ $employe->Salaire }} DH</td>
        </tr>
    </table>
    @endsection
</body>
</html>
