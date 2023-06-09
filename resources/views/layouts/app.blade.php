<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }} </title>

  @vite('resources/js/app.js')
</head>
<body>
  <header>
    <h1 class="py-5">
      Movies
    </h1>
  </header>
  <main>
    @yield('cards')
  </main>
</body>
</html>