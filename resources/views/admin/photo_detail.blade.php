@extends('layouts.app')

@section('title', $photo->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <img src="{{ asset('storage/' . $photo->image) }}" class="img-fluid mb-3" alt="{{ $photo->title }}">
            <h1>{{ $photo->title }}</h1>
            <p>Uploaded by: <strong>{{ $photo->user->name }}</strong></p>
            <p>
                @foreach ($photo->hashtags as $hashtag)
                <a href="{{ route('user.search', ['query' => '#' . $hashtag->name]) }}" class="badge bg-secondary">#{{ $hashtag->name }}</a>
                @endforeach
            </p>
            <p>{{ $photo->description }}</p>
        </div>
    </div>
</div>
@endsection
