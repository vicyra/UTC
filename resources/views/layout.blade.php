<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">🥲</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('category', ['id' => $category->id])}}">{{$category->category}}</a></li>
                    @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('writers')}}">Writers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('popular')}}">Popular</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container-fluid p-5 mb-5">
        @yield('content')
    </div>

    <footer class="footer bg-primary text-center text-white p-3 fixed-bottom">
        <p>EduFun 2024 | Web Programming | Cynthia Pandora | 2602189442</p>
    </footer>

    <script src="{{asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
