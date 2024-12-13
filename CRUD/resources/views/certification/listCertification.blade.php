<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des certifications</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Gestion des certifications</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          {{-- <th scope="col">Intervenant</th> --}}
          <th scope="col">Domaine</th>
          <th scope="col">Intitulé Certification</th>
          <th scope="col">Organisme Certification</th>
          <th scope="col">Type Certification</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($certifs as $certif)
        <tr>
          <th scope="row">{{ $certif->id }}</th>
          {{-- <td>{{ $certif->intervenant->nom }}</td> --}}
          <td>{{ $certif->domaine->nom_domaine }}</td>
          <td>{{ $certif->intiltule_certification }}</td>
          <td>{{ $certif->organisme_certification }}</td>
          <td>{{ $certif->type_certification }}</td>
          <td>
              <a href="{{ route('certifications.show', $certif->id) }}" class="btn btn-primary">Details</a>
              <a href="{{ route('certifications.edit', $certif->id) }}" class="btn btn-warning">Modifier</a>
              <form action="{{ route('certifications.destroy', $certif->id) }}" method="POST" style="display: inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette certification?')">Supprimer</button>
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{ route('certifications.create') }}" class="btn btn-primary">Ajouter</a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
