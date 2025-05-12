@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p><strong>Auteur :</strong> {{ $book->author }}</p>
    <p><strong>Description :</strong> {{ $book->description }}</p>
    <p><strong>Publié le :</strong> 
    {{ $book->published_at ? \Carbon\Carbon::parse($book->published_at)->format('d-m-Y') : 'Date non disponible' }}
</p>


    <h2>Avis :</h2>
    @forelse ($book->reviews as $review)
        <div>
            <p><strong>{{ $review->user->name }} :</strong> {{ $review->comment }}</p>
            <p><strong>Note :</strong> {{ $review->rating }}/5</p>
        </div>
    @empty
        <p>Aucun avis pour ce livre.</p>
    @endforelse

    <h3>Ajouter un avis :</h3>
    <form action="{{ route('reviews.store', $book->id) }}" method="POST">
        @csrf
        <div>
            <label for="rating">Note (1 à 5):</label>
            <input type="number" name="rating" id="rating" min="1" max="5" required>
        </div>
        <div>
            <label for="comment">Commentaire :</label>
            <textarea name="comment" id="comment" required></textarea>
        </div>
        <button type="submit">Ajouter un avis</button>
    </form>

    
    <h3>Note Moyenne : {{ $book->averageRating() }}</h3>

@endsection
