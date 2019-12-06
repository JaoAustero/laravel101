<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body
        class="uis-wrapper">
        @include('layouts.navbar')

        <main class="uis-container uis-margin-large">
            @include('layouts.messages')
            @yield('content')
        </main>

    </body>
</html>
