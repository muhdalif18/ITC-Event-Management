<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @vite('resources/js/app.js')
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

  {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}


</head>

{{-- <body class="flex font-sans antialiased">
  @include('layouts.sidebar')

  <div class="min-h-screen bg-gray-100 w-full">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endif

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>
</body> --}}

<body
  class="font-sans antialiased bg-gray-50 dark:bg-slate-900 bg-cover bg-center bg-no-repeat bg-[url('https://encycolorpedia.com/20364b.png')]"
  {{-- style="background-color: #C0D2E6"; --}}>
  @include('layouts.navigation')

  @include('layouts.sidebar')

  <!-- Content -->
  <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
    {{ $slot }}
  </div>
  <!-- End Content -->
</body>

</html>
