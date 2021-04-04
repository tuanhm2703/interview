<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    </head>
    <body>
    <div id="app">
            <App></App>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
    <!-- <script src="https://kit.fontawesome.com/e8463a2237.js" crossorigin="anonymous"></script> -->
    </body>
</html>