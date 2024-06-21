@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Posts</h1>
            @foreach ($posts as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->content }}</p>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Create New Post</a>
        </div>
    </div>
@endsection
