@extends('layout.home')

@section('title', 'login')

@section('content')

<div class="ml-8 flex justify-center w-9/12">
    <form action="">
        <div>
            <label for="email" class="pr-2">email</label>
        </div>
        <div>
            <input type="email" value="email">
        </div>
        <div>
            <label for="password" class="pr-2">Password</label>
            <input type="password" value="cognome">
        </div>
        <div class="flex justify-center my-5">
            <button type="submit" class="outline px-5 bg-green-300 border-rounded">Sign-in</button>
        </div>
    </form>
</div>

@endsection