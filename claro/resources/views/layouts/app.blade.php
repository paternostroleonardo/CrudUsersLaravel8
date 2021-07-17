<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Prueba en Laravel 8</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

  </head>
  <body class="bg-gray-100 text-gray-800">
      <nav class="flex py-5 bg-gray-300 text-white">
          <div class="w-1/2 px-12 mr-auto">
            <img class="h-12 w-30" src="https://claroinsurance.com/wp-content/uploads/2020/07/Home-logo-1-38.svg"/>
          </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
       <li>

       </li>
       @else
       <li class="mx-6">
        <a href="{{ route('login.index') }}" class="text-indigo-500 font-semibold hover:text-white hover:bg-indigo-700 py-3 px-4 rounded-md">Log in</a>
        <a href="{{ route('register.index') }}"  class="text-indigo-500 font-semibold hover:bg-white hover:text-indigo-700 border-2 border-indigo-500 py-2 px-4 rounded-md">Register</a>
       </li>
       @endif
      </ul>
    </nav>
     @yield('content')
  </body>
</html>
