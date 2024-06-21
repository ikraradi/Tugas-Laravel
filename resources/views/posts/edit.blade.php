@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Edit Post</h1>
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" required value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
