@extends('layout.app')

@section('title')Index @endsection

@section('content')
<div class="text-center">
  <a href="{{ route('posts.create') }}" class="mt-4 btn btn-success">Create Post</a>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $posts as $post)
    <tr>
      <td>{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->post_creator }}</td>
      <td>{{ $post->created_time }}</td>
      <td>
        <button href="{{ route('posts.show', ['post' => $post['id']]) }}" class="btn btn-info">View</button>
        <button href="{{ route('posts.edit', ['post' => $post['id']]) }}" class="btn btn-primary">Edit</button>
        <form style="display:inline-block"method="POST" action="{{ route('posts.destory',['post' => $post['id']])}}">
          @method("DELETE")
          @csrf
          <button onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
<div class="width:50px;">
  {{$posts->links()}}
</div>


@endsection
