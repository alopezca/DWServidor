<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<header>
    @include('includes.header')
</header>
<body>
<div class="container">
    <div id="main">
        <h1>hola caracola</h1>
        @yield('pages.formulario')
    </div>

    @include('includes.footer')

</div>
</body>
</html>