<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reveal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">image</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">tel</th>
            <th scope="col">date naissance</th>
            <th scope="col">office</th>
            <th scope="col">filiere</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($etudiants as $etudiant)
          <tr>
            <th scope="row">{{ $etudiant->id }}</th>
            <td><img src="{{ asset('storage/' . $etudiant->image) }}" width="100" height="100" alt="{{ $etudiant->image }}"></td>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->tel }}</td>
            <td>{{ $etudiant->date_naissance }}</td>
            <td>{{ $etudiant->office }}</td>
            <td>{{ $etudiant->filiere }}</td>
            <td>
                <a href="{{ route('etudiant.show', $etudiant->id) }}" class="btn btn-primary">Details</a>
                <form action="{{ route('etudiant.destroy', $etudiant->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Supprimer</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Ajouter</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>
