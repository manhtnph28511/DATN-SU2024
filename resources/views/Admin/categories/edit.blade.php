@extends('master')
@section('title')
    Welcome admin
@endsection
Update categories
@section('content')
    <form action="{{ route('categories.update', $category) }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
        </div>
        <button type="submit">Submit</button>
    </form>

    <a href="{{ route('categories.index') }}">Back to categories</a>
@endsection