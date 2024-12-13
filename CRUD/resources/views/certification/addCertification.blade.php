<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Form</title>
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
        <h2>Ajouter une Certification</h2>
        <form method="POST" action="{{ route('certifications.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="domaines_id">Domaine</label>
                <select class="form-control" name="domaines_id">
                    @foreach($domaines as $domaine)
                        <option value="{{ $domaine->id }}">{{ $domaine->nom_domaine }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="intervenants_id">Intervenant</label>
                <select class="form-control" name="intervenants_id">
                    @foreach($intervenants as $intervenant)
                        <option value="{{ $intervenant->id }}">{{ $intervenant->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="intiltule_certification">Intitulé Certification</label>
                <input type="text" class="form-control" name="intiltule_certification" placeholder="Intitulé Certification">
            </div>
            <div class="form-group">
                <label for="organisme_certification">Organisme Certification</label>
                <input type="text" class="form-control" name="organisme_certification" placeholder="Organisme Certification">
            </div>
            <div class="form-group">
                <label for="type_certification">Type Certification</label>
                <input type="text" class="form-control" name="type_certification" placeholder="Type Certification">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>
