<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('./assets/icon/fav.png') }}">
  <title>{{ $title }} | {{ $role }} | Smansa Computer Club</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  @yield('components')

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="{{ asset('./assets/js/script.js') }}"></script>
</body>

</html>
