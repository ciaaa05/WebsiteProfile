<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('art_name')</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="/css/gallery.css">
</head>
<body>
    @if ($art['type'] == 'Original Art')
        <div class="detail" style="background-color:orange; box-shadow: 0px 4px 25px 2px orange ;">
            @yield('content')
        </div>
     @elseif ($art['type'] == 'FanArt')
        <div class="detail" style="background-color:yellow; box-shadow: 0px 4px 25px 2px yellow ;">
            @yield('content')
        </div>
    @elseif ($art['type'] == 'Illustration')
        <div class="detail" style="background-color: rgb(28, 247, 28); box-shadow: 0px 4px 25px 2px rgb(28, 247, 28) ;">
            @yield('content')
        </div>
    @endif
</body>
</html>


