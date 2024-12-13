<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des intervenants et leur compétence</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">matricule</th>
        <th scope="col">nom</th>
        <th scope="col">date naissance</th>
        <th scope="col">intitule diplome</th>
        <th scope="col">type diplome</th>
        <th scope="col">specialite diplome</th>
        <th scope="col">type intervenant</th>
        <th scope="col">status</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($inters as $inter)
      <tr>
        <th scope="row">{{ $inter->id }}</th>
        <td>{{ $inter->matricule }}</td>
        <td>{{ $inter->nom }}</td>
        <td>{{ $inter->datenaissance }}</td>
        <td>{{ $inter->intitule_diplome }}</td>
        <td>{{ $inter->type_diplome }}</td>
        <td>{{ $inter->specialite_diplome }}</td>
        <td>{{ $inter->type_intervenant }}</td>
        <td>{{ $inter->status }}</td>
        <td>
            <a href="{{ route('intervenants.show', $inter->id) }}" class="btn btn-primary">Details</a>
            <form action="{{ route('intervenants.destroy', $inter->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Supprimer</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('intervenants.create') }}" class="btn btn-primary">Ajouter</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>