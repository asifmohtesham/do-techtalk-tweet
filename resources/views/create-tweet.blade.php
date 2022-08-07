<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create a Tweet</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
  </head>

  <body class="antialiased max-w-5xl m-auto">
    <h4 class="my-10 text-3xl">Create a Tweet</h4>

    <section class="block p-5 border-2 border-solid border-blue-100 rounded-lg">

      <form action="/tweets" method="post">
        @csrf

        <input type="text" name="body" id="body" class="w-full mb-2 p-2 text-black border-2 border-blue-500 rounded-md" placeholder="What's on?">

        <button type="submit" class="p-2 border-2 border-blue-500 text-blue-500 hover:text-white hover:bg-blue-500 rounded-md">Tweet</button>
      </form>
    </section>
  </body>

</html>
