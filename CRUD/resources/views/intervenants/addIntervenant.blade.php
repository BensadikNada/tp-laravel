<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Ajouter un Intervenant</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <h2>Ajouter un Intervenant</h2>
        <form method="POST" action="{{ route('intervenants.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="matricule">Matricule</label>
                <input type="text" class="form-control" name="matricule" placeholder="Matricule">
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="datenaissance">Date Naissance</label>
                <input type="date" class="form-control" name="datenaissance" placeholder="Date Naissance">
            </div>
            <div class="form-group">
                <label for="intitule_diplome">Intitulé Diplôme</label>
                <input type="text" class="form-control" name="intitule_diplome" placeholder="Intitulé Diplôme">
            </div>
            <div class="form-group">
                <label for="type_diplome">Type Diplôme</label>
                <input type="text" class="form-control" name="type_diplome" placeholder="Type Diplôme">
            </div>
            <div class="form-group">
                <label for="specialite_diplome">Spécialité Diplôme</label>
                <input type="text" class="form-control" name="specialite_diplome" placeholder="Spécialité Diplôme">
            </div>
            <div class="form-group">
                <label for="type_intervenant">Type Intervenant</label>
                <input type="text" class="form-control" name="type_intervenant" placeholder="Type Intervenant">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" placeholder="Status">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>
