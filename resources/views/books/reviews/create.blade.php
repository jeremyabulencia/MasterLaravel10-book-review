@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2x1">Add Review for {{ $book->title }}</h1>

    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf
        <label for="review">Review</label>
        <textarea name="review" id="review" cols="30" rows="10" required class="input mb-4"></textarea>
        @error('review')
            <p class="error">{{ $message }}</p>
        @enderror
        <label for="rating">Rating</label>

        <select name="rating" id="rating" class="input mb-4">
            <option value="">Select Rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        @error('rating')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection