
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Smart Library</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: white;
            color: black;
        }

        .navbar {
            background: #b7d7f0;
            padding: 15px;
        }

        .navbar a {
            color: black;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            margin: 25px;
            min-height: 400px;
        }

        h2 {
            color: #24578b;
        }

        .info {
            background: #eaf4fc;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #b7d7f0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #b7d7f0;
        }

        th, td {
            border: 1px solid gray;
            padding: 10px;
            text-align: left;
        }

        footer {
            background: #eeeeee;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>

<body>

    <x-navbar :username="$username ?? request('username')" />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
