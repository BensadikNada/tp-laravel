<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certification Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Certification Details</h1>
        @if(isset($certification) && !empty($certification))
            <ul class="list-group">
                <li class="list-group-item"><strong>ID:</strong> {{ $certification->id }}</li>
                <li class="list-group-item"><strong>Domaine:</strong> {{ $certification->domaine->nom_domaine }}</li>
                <li class="list-group-item"><strong>Intitulé de la Certification:</strong> {{ $certification->intiltule_certification }}</li>
                <li class="list-group-item"><strong>Organisme de Certification:</strong> {{ $certification->organisme_certification }}</li>
                <li class="list-group-item"><strong>Type de Certification:</strong> {{ $certification->type_certification }}</li>
            </ul>
            <a href="{{ route('certifications.edit', $certification->id) }}" class="btn btn-primary mt-3">Edit</a>
        @else
            <p>No certification found with the given ID.</p>
        @endif
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
