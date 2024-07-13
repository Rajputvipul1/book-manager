@extends('layout')

@section('content')
    <div class="mb-3">
        <a href="{{ route('books.create') }}" class="btn btn-success">Add New Book</a>
    </div>
    <div class="row">
        @foreach($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $book->title }}</h2>
                        <h5 class="card-subtitle mb-2 text-muted">{{ $book->author }}</h5>
                        <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}" class="img-fluid" style="width: 100px;">
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary mt-2">View</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning mt-2">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
