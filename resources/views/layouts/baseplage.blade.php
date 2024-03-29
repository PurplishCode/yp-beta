
@include('layouts.style')
@include('layouts.script')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@yield('content')
