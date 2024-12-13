<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervenant Details</title>
</head>
<body>
    <h1>Intervenant Details</h1>
    @if(isset($inter) && !empty($inter))
        <ul>
            <li><strong>ID:</strong> {{ $inter->id }}</li>
            <li><strong>Nom:</strong> {{ $inter->nom }}</li>
            <li><strong>Date de Naissance:</strong> {{ $inter->datenaissance }}</li>
            <li><strong>Intitulé du Diplôme:</strong> {{ $inter->intitule_diplome }}</li>
            <li><strong>Type du Diplôme:</strong> {{ $inter->type_diplome }}</li>
            <li><strong>Spécialité du Diplôme:</strong> {{ $inter->specialite_diplome }}</li>
            <li><strong>Type de l'Intervenant:</strong> {{ $inter->type_intervenant }}</li>
            <li><strong>Status:</strong> {{ $inter->status }}</li>
        </ul>
        <a href="{{ route('intervenants.edit', $inter->id) }}">Edit</a>
    @else
        <p>No intervenant found with the given ID.</p>
    @endif
</body>
</html>
