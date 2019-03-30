<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .errors{
            border: 1px solid lightblue;
            background-color: lightgrey;
            border-radius: 4px;
            padding: 5px;
            font-weight: bold;
            color: red;
        }
        .shortUrl{
            border: 1px solid lightblue;
            border-radius: 4px;
            padding: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>