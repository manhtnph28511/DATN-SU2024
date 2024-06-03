@extends('master')
@section('title')wellcome admin
@endsection
@section('page')
day la trang chu admin
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-block" href="{{ route('auth.index') }}">quan li tai khoan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-block" href="{{ route('categories.index') }}">quan li categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-block" href="{{ route('products.index') }}">quan li product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-block" href="{{ route('blogs.index') }}">quan li blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-block" href="{{ route('wishlists.index') }}">quan li wishlist</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">@yield('page')</h1>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>
</div>
@endsection

@section('css')
<style>
    /* Tùy chỉnh các thẻ <a> trong menu dọc */
    .navbar-vertical .nav-link {
        color: #fff; /* Màu chữ */
        padding: 10px 20px; /* Padding */
        text-decoration: none; /* Loại bỏ gạch chân */
    }

    .navbar-vertical .nav-link:hover {
        background-color: #343a40; /* Màu nền khi hover */
    }

    .navbar-vertical .nav-link.active {
        background-color: #343a40; /* Màu nền khi được chọn */
    }
</style>
@endsection
