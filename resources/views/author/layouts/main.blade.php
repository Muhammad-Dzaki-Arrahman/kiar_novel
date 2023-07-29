<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiar Blog | {{ $title }}</title>
    <link rel="shortcut icon" href="../../../image/Girl.png">
    {{-- <link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/login.css"> --}}
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/6ffe91ade0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
      trix-toolbar [data-trix-button-group= "file-tools"] {
        display: none;
      }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
</head>
<body class="flex bg-gray-100 min-h-screen">
    @include('author.layouts.sidebar')
    <div class="flex-grow text-gray-800">
        @include('author.layouts.header')
      <main class="p-6 sm:p-10 space-y-6" style="background-color: #c7e9b0">
        @yield('container')
      </main>
    </div>
    <script src="../../../../js/salam.js"></script>
  </body>