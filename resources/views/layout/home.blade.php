<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>

    <div class="p-5 w-full bg-slate-500">
        <nav class="flex justify-between text-white">
            <ul class="flex justify-around w-2/12">
                <li><a href="{{ url('')}}">Home</a></li>
                <li><a href="{{ url('')}}">Aggiungi Auto</a></li>
            </ul>
            <ul class="flex justify-around w-2/12">
                <li><a href="{{ url('profile')}}" target="_self">Profile</a></li>
                <li><a href="{{ url('')}}" target="_self">Login</a></li>
                <li><a href="{{ url('')}}" target="_self">Logout</a></li>
            </ul>
        </nav>
    </div>

    <div class="w-8/12 pt-6 flex justify-center">
        @yield('content')
    </div>
</body>
</html>