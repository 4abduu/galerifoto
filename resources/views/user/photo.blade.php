@extends('layouts.app')

@section('title', 'My Photos')

@section('content')
<h1>My Photos</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($photos as $photo)
        <tr>
            <td>{{ $photo->id }}</td>
            <td>{{ $photo->title }}</td>
            <td>{{ $photo->description }}</td>
            <td>
                <form action="{{ route('user.photos.destroy', $photo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-warning btn-sm">Archive</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
