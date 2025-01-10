@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<h1 class="text-center">Explore Photos</h1>
<div class="row">
    @foreach ($photos as $photo)
    <div class="col-md-3 mb-4">
        <div class="card">
            <img src="{{ asset('storage/' . $photo->image) }}" class="card-img-top" alt="{{ $photo->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $photo->title }}</h5>
                <a href="{{ route('user.photo.detail', $photo->id) }}" class="btn btn-primary btn-sm">View Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection