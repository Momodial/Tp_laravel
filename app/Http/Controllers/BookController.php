<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Récupérer les livres avec pagination (par exemple 5 livres par page)
        $books = Book::paginate(5);
        
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::with('reviews.user')->findOrFail($id);

        if (!$book) {
            abort(404, 'Livre non trouvé');
        }

        return view('books.show', compact('book'));
    }

    
}
