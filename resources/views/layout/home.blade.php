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
            <ul class="flex ">
                <li><a href="{{ url('')}}" class="p-3">Home</a></li>
                <li><a href="{{ url('')}}" class="p-3">Aggiungi Auto</a></li>
            </ul>
            <ul class="flex ">
                <li><a href="{{ url('profile')}}" target="_self" class="p-3">Profile</a></li>
                <li><a href="{{ url('register')}}" target="_self" class="p-3">Register</a></li>
                <li><a href="{{ url('login')}}" target="_self" class="p-3">Login</a></li>
                <li><a href="{{ url('logout')}}" target="_self" class="p-3">Logout</a></li>
            </ul>
        </nav>
    </div>

    <div class="pt-6 w-full flex justify-center">
        @yield('content')
    </div>
</body>
</html>