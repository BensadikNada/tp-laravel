<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Modifier un Intervenant</title>
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
        <h2>Modifier un Intervenant</h2>
        <form method="POST" action="{{ route('intervenants.update', $inter->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="matricule">Matricule</label>
                <input type="text" class="form-control" name="matricule" placeholder="Matricule" value="{{ $inter->matricule }}">
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{ $inter->nom }}">
            </div>
            <div class="form-group">
                <label for="datenaissance">Date de Naissance</label>
                <input type="date" class="form-control" name="datenaissance" value="{{ $inter->datenaissance }}">
            </div>
            <div class="form-group">
                <label for="intitule_diplome">Intitulé du Diplôme</label>
                <input type="text" class="form-control" name="intitule_diplome" placeholder="Intitulé du Diplôme" value="{{ $inter->intitule_diplome }}">
            </div>
            <div class="form-group">
                <label for="type_diplome">Type du Diplôme</label>
                <input type="text" class="form-control" name="type_diplome" placeholder="Type du Diplôme" value="{{ $inter->type_diplome
                }}">
            </div>
            <div class="form-group">
                <label for="specialite_diplome">Spécialité du Diplôme</label>
                <input type="text" class="form-control" name="specialite_diplome" placeholder="Spécialité du Diplôme" value="{{ $inter->specialite_diplome }}">
            </div>
            <div class="form-group">
                <label for="type_intervenant">Type de l'Intervenant</label>
                <input type="text" class="form-control" name="type_intervenant" placeholder="Type de l'Intervenant" value="{{ $inter->type_intervenant }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" placeholder="Status" value="{{ $inter->status }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>
