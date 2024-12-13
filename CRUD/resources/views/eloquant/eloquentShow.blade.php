<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaire Details</title>
</head>
<body>
    <h1>Stagiaire Details</h1>
    @if(isset($etudiant) && !empty($etudiant))
        <ul>
            <li><strong>ID:</strong> {{ $etudiant->id }}</li>
            <li><strong>Image:</strong> <img src="{{ asset('storage/images/' . $etudiant->image) }}" width="100" height="100" alt="{{ $etudiant->image }}"></li>
            <li><strong>Nom:</strong> {{ $etudiant->nom }}</li>
            <li><strong>Prénom:</strong> {{ $etudiant->prenom }}</li>
            <li><strong>tel:</strong> {{ $etudiant->tel }}</li>
            <li><strong>Date de Naissance:</strong> {{ $etudiant->date_naissance }}</li>
            <li><strong>office:</strong> {{ $etudiant->office }}</li>
            <li><strong>filiere:</strong> {{ $etudiant->filiere }}</li>
        </ul>
        <a href="{{ route('etudiant.edit', $etudiant->id) }}">Edit</a>
        <form action="{{ route('etudiant.destroy', $etudiant->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
        </form>
    @else
        <p>No stagiaire found with the given ID.</p>
    @endif
</body>
</html>
