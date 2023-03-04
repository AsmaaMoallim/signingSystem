<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Singing System</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
              @yield('content')
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>

</html>