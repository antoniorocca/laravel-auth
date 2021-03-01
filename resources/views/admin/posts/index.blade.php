@extends('layouts.dashboard')

@section('content')
<h1>All posts for the admin</h1>
<a href="{{ route('admin.posts.create')}}">Create new post</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td scope="row">{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>
                <a href="{{ route('admin.posts.show', ['post'=> $post->slug])}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-sw"></i> View</a>
                <a href="#" class="btn btn-warning"><i class="fas fa-pen fa-xs fa-sw"></i> Edit</a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash fa-xs fa-sw"></i> Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection