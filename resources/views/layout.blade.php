<!DOCTYPE html>
<html>
    <head>
        <title>Andrell Testing Env</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset("css/app.css") }}" />
    </head>
    <body>
        <div class="container">
             @yield('content')
        </div>
    </body>
</html>
