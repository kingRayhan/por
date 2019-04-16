<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/components/component.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/app.css" media="all">

</head>

<body>
    <div id="app">
        <h1>Navbar</h1>
        <router-view></router-view>
        <h1>Footer</h1>


    </div>
    <script src="js/app.js"></script>
</body>

</html>