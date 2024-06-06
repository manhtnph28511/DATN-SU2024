@extends('master')
@section('title')wellcome admin
@endsection
crate categories
@section('content')

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mt-2 mb-2">
            <label class="form-label" for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('categories.index') }}" class="btn btn-danger">back to categories</a>
    </form>
@endsection