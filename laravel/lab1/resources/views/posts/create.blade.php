@extends('layout.app')

@section('title')Create @endsection

@section('content')
        <form method="POST" action="{{ route('posts.store')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description"id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select class="form-control"name="creator">
                    <option value="Ahmed">Ahmed</option>
                    <option value="Mohamed">Mohamed</option>

                </select>
            </div>

          <button class="btn btn-success">Create</button>
        </form>
@endsection
    
