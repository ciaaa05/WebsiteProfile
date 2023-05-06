<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Art Gallery</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="/css/gallery.css">
</head>

<body>
    <nav id="navbar-example2" class="navbar px-3 sticky-top" style="background: #000 no-repeat">
        <a class="navbar-brand text-white" href="#">ALIS</a>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link text-white" href="/#home">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    About Me
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="/#about_me">Profile</a></li>
                    <li><a class="dropdown-item" href="/#skill">Skill</a></li>
                    <li><a class="dropdown-item" href="/#personality">Personality</a></li>
                    <li><a class="dropdown-item" href="/#interest">Interests</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white active" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/#resume">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <div class="galleries">
        <h1 class="text-center mt-4">My Art Gallery</h1>

        <div class="gallery-list row mb-5">
            @foreach ($arts as $art)
                @if ($art['type'] == 'Original Art')
                    <a href="/gallery/{{ $art['slug'] }}" class="text-decoration-none text-dark"
                        style="min-height: 20vw; width:30vw">
                        <div class="gallery-1 d-flex flex-column mt-4 "
                            style="border: 4px solid orange; background-color:orange; min-height: 20vw; width:30vw">
                            <img src="{{ asset('assets/' . $art['pics']) }}" alt="" style="border-bottom:4px solid orange">
                            <div class="description px-3 py-2 text-center">
                                <h3>{{ $art['name'] }}</h3>
                                <h5>Year: {{ $art['year'] }}</h5>
                                <h5>Type: {{ $art['type'] }}</h5>
                            </div>
                        </div>
                    </a>
                @elseif ($art['type'] == 'FanArt')
                    <a href="/gallery/{{ $art['slug'] }}" class="text-decoration-none text-dark"
                        style="min-height: 20vw; width:30vw">
                        <div class="gallery-2 d-flex flex-column mt-4"
                            style="border: 4px solid yellow; background-color:yellow; min-height: 20vw; width:30vw">
                            <img src="{{ asset('assets/' . $art['pics']) }}" alt="" style="border-bottom:4px solid yellow">
                            <div class="description px-3 py-2 text-center">
                                <h3>{{ $art['name'] }}</h3>
                                <h5>Year: {{ $art['year'] }}</h5>
                                <h5>Type: {{ $art['type'] }}</h5>
                            </div>
                        </div>
                    </a>
                @elseif ($art['type'] == 'Illustration')
                    <a href="/gallery/{{ $art['slug'] }}" class="text-decoration-none text-dark"
                        style="min-height: 20vw; width:30vw">
                        <div class="gallery-3 d-flex flex-column mt-4"
                            style="border: 4px solid rgb(28, 247, 28); background-color:rgb(28, 247, 28); min-height: 20vw; width:30vw">
                            <img src="{{ asset('assets/' . $art['pics']) }}" alt="" style="border-bottom:4px solid rgb(28, 247, 28)">
                            <div class="description px-3 py-2 text-center">
                                <h3>{{ $art['name'] }}</h3>
                                <h5>Year: {{ $art['year'] }}</h5>
                                <h5>Type: {{ $art['type'] }}</h5>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
