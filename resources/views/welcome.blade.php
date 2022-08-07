<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
  </head>

  <body class="antialiased max-w-5xl m-auto">
    <div class="p-4 text-2xl">{{ $message }}</div>

    <a class="inline-block mb-4 p-2 font-semibold text-blue-500 border-2 border-solid border-transparent rounded-md border-blue-500 hover:text-white hover:bg-blue-500 transition" href="/create-tweet" title="Create a Tweet">Create</a>

    @forelse ($tweets as $tweet)
      <section class="block mb-4 p-5 border-2 border-solid border-blue-100 rounded-lg">
        <p class="text-xs">{{ $tweet->created_at->diffForHumans() }}</p>
        <p class="text-lg">{{ $tweet->body }}</p>
      </section>

    @empty

      <span class="inline-block">No tweets!</span>

    @endforelse
  </body>

</html>
