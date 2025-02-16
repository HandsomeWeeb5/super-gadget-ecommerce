<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Super Gadget - @yield("title")</title>
</head>
<body>
  <nav class="container max-w-full bg-fuchsia-50 flex justify-between items-center p-4 max-md:flex-col">
    <h1 class="font-mono text-5xl">Super Gadget</h1>
    <ul class="flex gap-5 mr-5 max-md:mt-4">
        <li class="transition-all p-2 hover:bg-fuchsia-300 hover:rounded-md duration-300">
            <a href="/">Home</a>
        </li>
        <li class="transition-all p-2 hover:bg-fuchsia-300 hover:rounded-md">
            <a href="/blog">Blog</a>
        </li>
        <li class="transition-all p-2 hover:bg-fuchsia-300 hover:rounded-md">
            <a href="/about">About</a>
        </li>
        <li class="transition-all p-2 hover:bg-fuchsia-300 hover:rounded-md">Shop</li>
    </ul>
  </nav>
  @section('content')
    <h1>This is content</h1>
  @show
</body>
</html>