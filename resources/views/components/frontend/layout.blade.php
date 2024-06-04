<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('assets/svgs/logo-mark.svg') }}" type="image/x-icon">
        <title> @yield('title') | {{ config('layout.name', 'Ecommerce') }}</title>
        {{-- scripts --}}
        @vite(['resources/css/frontend.css'])

        {{-- styles --}}
        @livewireStyles

        {{-- costum css --}}
        @stack('css')
       
        
    </head>

    <body>
       {{-- navbar --}}

       <x-frontend.navbar/>

        {{-- slot --}}
        {{ $slot }}

        {{-- scripts --}}
        @livewireScripts

        {{-- costum js --}}
        

        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
            @stack('js')
        <script type="text/javascript">
            $(() => {
                $('#navbarToggler').on('click', function (e) {
                    let navigationMenu = $(this).attr('data-target')
                    $(navigationMenu).toggleClass('hidden')
                })
            })
        </script>
    </body>

</html>