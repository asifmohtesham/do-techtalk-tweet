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
    <div class="p-4 text-2xl">{{ $message ?? '' }}</div>

    <a class="inline-block mb-4 p-2 font-semibold text-blue-500 border-2 border-solid border-blue-500 hover:text-white hover:bg-blue-500 focus:text-white focus:bg-blue-500 rounded-md transition" href="/create-tweet" title="Create a Tweet">Create</a>

    @forelse ($tweets as $tweet)
      <section class="flex flex-row flex-wrap mb-4 p-5 border-2 border-solid border-blue-100 rounded-lg">

        <div class="toolbar flex flex-row flex-wrap items-center">
          <p class="text-xs">{{ $tweet->created_at->diffForHumans() }}</p>
          <span class="px-2 py-1">&bullet;</span>
          <a class="text-xs text-blue-500 hover:underline hover:underline-offset-4" href="/tweets/{{ $tweet->id }}/edit" rel="noopener noreferrer">Edit</a>
        </div>

        <p class="w-full text-lg">{{ $tweet->body }}</p>
      </section>

    @empty

      <span class="inline-block">No tweets!</span>

    @endforelse
  </body>

</html>
