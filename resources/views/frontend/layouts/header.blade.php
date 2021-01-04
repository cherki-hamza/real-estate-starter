<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

       @if(LaravelLocalization::getCurrentLocale() ==='ar')
        <!-- rtl style -->
        {{-- <link rel="stylesheet" href="arabic-style.css"> --}}
         <!-- bootstrap rtl arabic -->
            <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
            integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">

        @else
        <!-- ltr style -->
        {{-- <link rel="stylesheet" href="en-fr-es-style.css"> --}}
         <!-- bootstrap ltr english-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        @endif

        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>



    @yield('my-styles')
    <title>@yield('title')</title>
</head>
@if(LaravelLocalization::getCurrentLocale() ==='ar')
<body dir="rtl">
@else
<body>
@endif
