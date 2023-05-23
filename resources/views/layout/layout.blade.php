<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('layout.header')
    </header>
    <ul>
        @section('sidebar')
            <li>Laminating</li>
            <li>Bordir & Socklinear</li>
            <li>Data PO</li>
            <li>SPK</li>
            <li>Grafik Borsoc</li>
        @show
    </ul>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <h3>@include('layout.footer')</h3>
    </footer>
</body>
</html>