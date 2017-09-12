 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>
 <!-- Styles -->
 <link href="{{ asset('css/reset/reset.css') }}" rel="stylesheet" text="text/css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="{{ mix('css/app.css') }}" rel="stylesheet" text="text/css">
 {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" text="text/css"> --}}
