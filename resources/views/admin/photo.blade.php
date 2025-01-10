@extends('layouts.app')

@section('title', 'Manage Photos')

@section('content')
<h1>Manage Photos</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>User ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($photos as $photo)
        <tr>
            <td>{{ $photo->id }}</td>
            <td>{{ $photo->title }}</td>
            <td>{{ $photo->description }}</td>
            <td>{{ $photo->user_id }}</td>
            <td>
                <form action="{{ route('admin.photos.destroy', $photo->id) }}" method="POST">
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

