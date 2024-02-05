@include('layout.header')
<div class="h-100 position-fixed bg-secondary position-absolute w-100"></div>
    @include('layout.sidebar')
    <main class="main-content position-relative border-radius-lg pb-5">
        @include('layout.navbar')
        <div class="container-fluid py-4">
@yield('content')
<footer class="position-absolute start-0 end-0 bottom-0">
    <p class="text-center">Copyright © 2021<a href="#" id="copyright" class="px-1">Adi
        Winarno & Fitri Lestari</a>.
    </p>
</footer>
</div>
</main>
@include('layout.footer')