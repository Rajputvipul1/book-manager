@extends('layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{ $book->title }}</h1>
            <h5 class="card-subtitle mb-2 text-muted">{{ $book->author }}</h5>
            <p class="card-text">{{ $book->description }}</p>
            <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}" class="img-fluid" style="width: 200px;">
            <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Back to list</a>
        </div>
    </div>
@endsection
