<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  @livewireStyles
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
  <div>
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
  </div>
  @livewireScripts

</body>
</html>
