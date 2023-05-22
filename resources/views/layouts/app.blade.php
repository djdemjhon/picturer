<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Picturer') }}</title>

    @vite('resources/css/app.css','resources/js/app.js')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<style>
.material-icons {
  font-size: 19px;
  margin-bottom: 4px;
}
</style>
<body>
    <div id="app">
    <nav class="bg-neutral-950 py-2 fixed top-0 w-full" style="z-index: 1000;">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center">
      <a href="{{ url('') }}" class="text-green-500 font-bold text-xl">Picturer</a>


      <div class="flex">
  <a href="{{ url('') }}" class="text-gray-400 hover:text-white px-3 py-2">
    <i class="material-icons" style="vertical-align: middle;">home</i>
    Home
  </a>
  <a href="{{ route('pictures.upload') }}" class="text-gray-400 hover:text-white px-3 py-2">
    <i class="material-icons" style="vertical-align: middle;">cloud_upload</i>
    Upload
  </a>
  <a href="#" class="text-gray-400 hover:text-white px-3 py-2">
    <i class="material-icons" style="vertical-align: middle;">whatshot</i>
    Popular
  </a>

</div>
      <div>
        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Register now</button>
      </div>
    </div>
  </div>
</nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>