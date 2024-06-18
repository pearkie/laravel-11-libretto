<!-- resources/views/library/index.blade.php -->

<h1>Library</h1>

@foreach ($authors as $author)
    <h2>{{ $author->name }}</h2>

    @foreach ($author->books as $book)
        <h3>{{ $book->title }}</h3>

        <p>Genres:
            @foreach ($book->genres as $genre)
                {{ $genre->name }},
            @endforeach
        </p>

        <h4>Reviews:</h4>
        <ul>
            @foreach ($book->reviews as $review)
                <li>
                    <strong>Rating:</strong> {{ $review->rating }} |
                    <strong>Content:</strong> {{ $review->content }}
                </li>
            @endforeach
        </ul>
    @endforeach

    <hr>
@endforeach
