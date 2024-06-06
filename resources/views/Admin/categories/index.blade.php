@extends('master')
@section('title')wellcome admin
@endsection
quan li categories
@section('content')
<a href="{{route('categories.create')}}">create</a>
    <table border="1">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>CategoryName</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->created_at}}</td>
                <td>{{ $item->updated_at }}</td>
                <td><a href="{{route('categories.edit',$item->id)}}">update</a></td>
                <td>
                    <form action="{{ route('categories.destroy', $item->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            
        @endforeach
        </tbody>
    </table>


<a href="{{ route('Admin.index') }}">ve trang chu</a>
@endsection