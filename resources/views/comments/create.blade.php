@extends('partials.layout')
@section('content')
<div class="container">
    <h1>add Comment</h1>
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="body" class="form-label">comment</label>
            <textarea name="body" id="body" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="post_id" class="form-label">post</label>
            <select name="post_id" id="post_id" class="form-select" required>
                @foreach ($posts as $post)
                    <option value="{{ $post->id }}">{{ $post->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">add Comment</button>
    </form>
</div>
@endsection