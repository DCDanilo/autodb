@extends('layout.home')

@section('title', 'login')

@section('content')

<div class="ml-8 flex justify-center w-9/12">
    <form action="">
        <div>
            <label for="email" class="pr-2">email</label>
            <input type="email" value="" name="email" class="border">
        </div>
        <div>
            <label for="password" class="pr-2">Password</label>
            <input type="password" value="" name="password" class="border">
        </div> 
        <div>
            <input type="checkbox" name="remindMe" class="mt-5">
            <span class="pl-2">Memorizza dati</span>
        </div>
        <div class="flex justify-center my-5">
            <button type="submit" class="outline px-5 bg-green-300 border-rounded">Sign-in</button>
        </div>
    </form>
</div>

@endsection