<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://png.icons8.com/plasticine/100/000000/moleskine.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
    <title>Портфолио - Бельченков Алексей</title>
    <!-- Styles -->
    @include('header.head')
</head>
<body>
<v-app id="app">
    <v-content>
        @yield('content')
    </v-content>
</v-app>

@include('footer.footer')
</body>
</html>
