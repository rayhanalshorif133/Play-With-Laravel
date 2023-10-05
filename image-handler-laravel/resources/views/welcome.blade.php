<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-43921182.css') }}"> --}}
</head>

<body>
    <h1 class="text-3xl font-bold font-mono uppercase text-white text-center py-6 bg-teal-700">
        Image Handler
    </h1>

    <form class="bg-teal-500 shadow-lg rounded-xl h-auto w-6/12 p-6 mx-auto mt-6" action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="">
          <label class="text-gray-200 font-sans text-xl capitalize">Upload Image <span class="text-red-600">*</span></label>
          <input type="file" name="image" class="mt-1 block w-full rounded-md bg-gray-300 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
          <button type="submit" class="px-5 py-2 mt-4 font-mono text-base border-[2px] border-gray-700 text-gray-100 rounded-md hover:bg-gray-700">
            Upload
          </button>
        </div>
    </form>

</body>

</html>
