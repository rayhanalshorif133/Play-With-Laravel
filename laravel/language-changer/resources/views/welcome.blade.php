<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <h1 class="py-5 mx-auto text-3xl font-bold text-center text-white bg-teal-500">
        Language Changer
    </h1>

    <div class="justify-center px-10 py-6 mx-auto bg-white shadow-lg w-fit">
        <form action="{{ route('changeLanguage') }}" method="POST">
            @csrf
            <select name="locale" onchange="this.form.submit()">
                <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
                <option value="es" {{ app()->getLocale() === 'es' ? 'selected' : '' }}>Español</option>
                <!-- Add more language options as needed -->
            </select>
        </form>
    </div>

    <div class="w-1/2 p-10 bg-white shadow-lg border-[1px] border-gray-400 justify-center mx-auto my-10">

        <p>{{__('messages.welcome')}}</p>
     <p> {{__('messages.home')}}</p>
    </div>
</body>

</html>
