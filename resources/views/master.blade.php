<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Link tới CSS của Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
</head>
<body>
    <!-- Header -->
   
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="#">@yield('nav')</a>
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

    <footer class="bg-dark text-light text-center py-3">
        <div class="container">
            <span>&copy; 2024 Your Website</span>
        </div>
    </footer>

    <!-- Link tới JavaScript của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
