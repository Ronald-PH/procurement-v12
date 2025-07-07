<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.css')}}">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <link rel="icon" href="/img/logo.png" type="image/icon type">
    <script src="https://coreui.io/demo/free/3.4.0/js/main.js" async defer></script>
    <link rel="stylesheet" href="{{mix('css/custom.css')}}">
    <style>
        @import  url('https://rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
        * {
            font-family: var(--tblr-font-sans-serif);
        }
    </style>
    @yield('after-styles')
    <title>Procurement System | DOST XI</title>
    @livewireStyles
</head>
<body class="c-app" data-new-gr-c-s-check-loaded="14.1012.0" data-gr-ext-installed="">
    {{-- @include('sweetalert::alert') --}}
    {{-- <x-message/> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{mix('js/app.js')}}"></script>
    @if (Auth::user()->hasRole('Admin'))
        @include('includes.sidebar.admin')
    @elseif(Auth::user()->hasRole('Regional Director'))
        @include('includes.sidebar.regional-director')
    @else
        @include('includes.sidebar.users')
    @endif

    <div class="c-wrapper c-fixed-components" style="height: 100%;">
        @include('includes.header')
        <div class="c-body">
            <main class="c-main" style="background: url('/img/dost-building-white.png') no-repeat center / cover; padding: 10px;">
                {{ $slot }}
            </main>
            @include('includes.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    @if (\Session::has('success'))
        <script>
            Swal.fire({
                title: "Success",
                text: "{{ \Session::get('success') }}",
                icon: "success"
            });
        </script>
    @endif
</body>
</html>
@yield('after-scripts')
