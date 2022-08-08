<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit a Tweet</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
  </head>

  <body class="antialiased max-w-5xl m-auto">
    <h4 class="my-10 text-3xl">Edit a Tweet</h4>

    <div class="toolbar flex flex-row flex-wrap mb-4">
      <a class="flex flex-row items-center px-2 border-2 border-blue-500 text-blue-500 hover:text-white hover:bg-blue-500 focus:text-white focus:bg-blue-500 rounded-md" href="/tweets" title="Back">
        <span class="back mr-1 font-bold text-3xl">&leftarrow;</span>
        Back
      </a>
    </div>

    <section class="block p-5 border-2 border-solid border-blue-100 rounded-lg">

      <form action="/tweets/{{ $tweet->id }}/edit" method="post">
        @csrf
        @method('PUT')

        <input type="text" name="body" id="body" class="w-full mb-2 p-2 text-black border-2 border-blue-500 rounded-md focus" placeholder="{{ $tweet->body }}" value="{{ $tweet->body }}">

        <button type="submit" class="p-2 border-2 border-blue-500 text-blue-500 hover:text-white hover:bg-blue-500 focus:text-white focus:bg-blue-500 rounded-md">Edit Tweet</button>
      </form>
    </section>
  </body>

</html>
