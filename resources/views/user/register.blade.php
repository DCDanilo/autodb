@extends('layout.home')

@section('title', 'Registrati')

@section('content')

<div class="flex justify-center">
<div class="p-6 bg-slate-200 w-100">
    <form action="{{route ('register')}}" method="post">
        @csrf
        <div class="mb-4">
            <input type="name" value="{{ old('name') }}" name="name" class="border p-2 rounded-sm @error('name') border-red-500 @enderror" placeholder="name">
        </div>

        @error('name')
            <div class="text-sm text-red-500 ">
                {{ $message }}
            </div>
        @enderror

        <div class="mb-4">
            <input type="email" value="{{ old('email') }}" name="email" class="border p-2 rounded-sm @error('name') border-red-500 @enderror" placeholder="email">
        </div>

        @error('email')
            <div class="text-sm text-red-500 ">
                {{ $message }}
            </div>
        @enderror

        <div class="mb-4">
            <input type="password" value="" name="password" class="border p-2 rounded-sm" placeholder="password">
        </div> 

        @error('password')
            <div class="text-sm text-red-500 ">
                {{ $message }}
            </div>
        @enderror
        
        <div class="mb-4">
            <input type="password" value="" name="password_confirmation" class="border p-2 rounded-sm" placeholder="password_confirmation">
        </div> 

        <div class="flex justify-center my-5">
            <button type="submit" class="outline px-5 bg-green-300 rounded-sm">Sign-in</button>
        </div>
    </form>
</div>


</div>

@endsection