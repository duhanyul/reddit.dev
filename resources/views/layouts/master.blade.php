<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @yield('title')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/posts">Posts</a></li>
                    <li><a href=""></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/auth/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="/auth/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="/posts/create"><span>Make Post</span></a></li>
                    <li>
                        <form action=""></form>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    </body>
</html>
