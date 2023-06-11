<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{  $title ?? 'Axies'}}</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-[#14141F]">
    @include('partials.header')
    <x-subheader>
        <x-slot name='subtitle'>
            Login
        </x-slot>
        <x-slot name='liText'>
            Community
        </x-slot>

    </x-subheader>
    {{-- @include('layouts.login') --}}
    <main>
        @yield('content')
    </main>


    @include('partials.footer')


</body>
</html>
