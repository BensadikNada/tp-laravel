<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('profile') }}" method="post">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" /><br>
        <label for="email">Email</label>
        <input type="text" name="email" /><br>
        <input type="submit" value="OK" />
    </form>

</body>
</html>