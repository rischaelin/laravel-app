<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog - @yield("title")</title>
    </head>
    <body>
        <div>
            Navigation
        </div>
        <hr />
        @include("elements.errors")
        @yield('content')
    <hr />
        @section("footer")
        <div>
            Fusszeile
        </div>
        @show
    </body>
</html>