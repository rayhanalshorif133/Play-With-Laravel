<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{ $data['title'] }}</title>
</head>

<body class="p-5">

    Change Logs Details:<br>
    Date: {{ $data['date'] }}<br>
    <table class="table px-5 py-1">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Keyword</th>
                <th scope="col">Subs count</th>
                <th scope="col">Renewcount</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data['charge'] as $key => $item)
                <tr>
                    <td scope="row">
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $item['keyword'] }}
                    </td>
                    <td>
                        {{ $item['subscount'] }}
                    </td>
                    <td>
                        {{ $item['renewcount'] }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    Sub And Unsubs Details:<br>
    Date: {{ $data['date'] }}<br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Keyword</th>
                <th scope="col">Subs count</th>
                <th scope="col">Unsubs Count</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data['subAndUnsub'] as $key => $item)
                <tr>
                    <td scope="row">
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $item['keyword'] }}
                    </td>
                    <td>
                        {{ $item['subscount'] }}
                    </td>
                    <td>
                        {{ $item['unsubscount'] }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
