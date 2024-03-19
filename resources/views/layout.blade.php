<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="display-4"> Jobs Market </h1>
            <p class="lead"> Where jobs are not sold but provided to JOBLESS </p>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">Menu</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/show"> Applications </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form"> Form </a>
                    </li>

                    <li>

                        @if(Auth::user())
                        <div class="dropdown mb-5">
                            <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                        @else

                        <button class="btn btn-sm btn-dark mb-4 "> <a class="nav-link text-white"
                                href="{{ route('login') }}">{{ __('Login')
                                }}</a></button>

                        @endif
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row">

            <main>
                @yield('content')
            </main>

            {{-- <div class="col-md-4">
                <aside>
                    <h2>Sidebar content</h2>
                    <p>This is an example of an aside bar. You can use it to display additional information, links, or
                        calls to action.</p>
                </aside>
            </div> --}}
        </div>
    </main>

    <footer class="bg-dark text-white py-3">
        <div class="container">
            <p class="text-center mb-0">Copyright &copy; 2024 Jobs Market </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>