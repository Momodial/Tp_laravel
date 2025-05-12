<!DOCTYPE html>
<html>
<head>
    <title>Liste des livres</title>
</head>
<body>
    <h1>Liste des livres</h1>

    @foreach($books as $book)
        <div style="margin-bottom: 20px;">
            <h2>{{ $book->title }}</h2>
            <p><strong>Auteur :</strong> {{ $book->author }}</p>
            <a href="{{ url('/books/' . $book->id) }}">Voir les détails</a>
        </div>
    @endforeach
    

</body>
</html>
