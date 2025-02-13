<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="flex items-center justify-center min-h-screen">
        <div class="flex space-x-4">
            <a href="/customer/export?start_date=2023-11-02&end_date=2023-11-10" 
                class="text-sm font-semibold flex items-center justify-center py-3 px-2 bg-green-600 text-gray-100 rounded-lg">
                Export Customer Data
            </a>
            <a href="/payment/export?start_date=2023-11-02&end_date=2023-11-10" 
                class="text-sm font-semibold flex items-center justify-center py-3 px-2 bg-blue-600 text-gray-100 rounded-lg">
                Export Payment Data
            </a>
        </div>
    </body>
</html>