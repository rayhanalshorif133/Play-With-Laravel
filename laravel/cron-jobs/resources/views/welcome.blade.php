<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1A202C] flex flex-col items-center justify-center min-h-screen">
  <div class="bg-[#2D3748] w-96 h-48 shadow-lg rounded-md flex items-center">
    <h3 class="text-4xl text-center text-white justify-center mx-auto">{{$users}}</h3>
  </div>
  <a href="{{route('api.randomUser')}}" class="text-2xl text-blue-400 mt-6">
    User API
  </a>
</body>
</html>
