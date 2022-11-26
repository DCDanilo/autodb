@extends('layout.home')

@section('title', 'Profilo')

@section('content')
<div class="flex bg-gray-200 py-5 h-96">

    <div class="bg-slate-500 flex justify-center">
        <nav class="mt-5 px-10">
            <div>
                <img src="" alt="profile_pic">
            </div>
        </nav>
    </div>

    <div class="ml-8 flex justify-center w-9/12">
        <form action="">
            <div>
                <label for="name" class="pr-2">Nome</label>
                <input type="text" value="nome">
            </div>
            <div>
                <label for="cognome" class="pr-2">Cognome</label>
                <input type="text" value="cognome">
            </div>
            <div>
                <label for="email" class="pr-2">Email</label>
                <input type="email" value="email">
            </div>

            <div class="flex justify-center my-5">
                <button type="submit" class="outline px-5 border-rounded">Update</button>
            </div>
        </form>
    </div>

</div>
@endsection