<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaire Details</title>
</head>
<body>
    <h1>Stagiaire Details</h1>
    @if(isset($stg) && !empty($stg))
        <ul>
            <li><strong>ID:</strong> {{ $stg[0]->id }}</li>
            <li><strong>Nom:</strong> {{ $stg[0]->nom }}</li>
            <li><strong>Prénom:</strong> {{ $stg[0]->prenom }}</li>
            <li><strong>Date de Naissance:</strong> {{ $stg[0]->date_de_naissance }}</li>
            <li><strong>Adresse:</strong> {{ $stg[0]->adresse }}</li>
        </ul>
        <a href="{{ route('stg.edit', $stg[0]->id) }}">Edit</a>
        {{-- <form action="{{ route('stg.destroy', $stg[0]->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form> --}}
    @else
        <p>No stagiaire found with the given ID.</p>
    @endif
</body>
</html>
