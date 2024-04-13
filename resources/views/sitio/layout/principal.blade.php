<!DOCTYPE html>
<html lang="en">
    <head>
        @include('sitio.includes.head')
    </head>
    <body>
        {{-- SECCION DE HEADER  --}}

        <header class="header fixed-top bg-light tex3">
            @include('sitio.includes.menu')
        </header>
        <div class="align-items-center" data-aos="fade-up" data-aos-delay="100">
            @yield('content')<!--instanciamiento-->
        </div>

        {{-- FOOTER - alimon--}}
        <footer class="container-fluid fot">
            @include('sitio.includes.footer')
        </footer>
        {{-- SECCION DE SCRIPTS  --}}

        @include('sitio.includes.scripts')
    </body>
</html>
