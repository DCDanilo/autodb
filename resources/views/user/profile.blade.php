@extends('layout.home')

@section('title', 'Profilo')

@section('content')
<div class="flex w-100">
    <div class="bg-slate-200">
        <nav class="bg-slate-200">
            <div>
                <img src="" alt="profile_pic">
            </div>
        <!--  <ul>
            <li></li>
        </ul> -->
        </nav>
    </div>
    <div class="w-9/12">
        <form action="">
            <label for="name">Nome</label>
            <input type="text" value="nome">
            <label for="cognome">Cognome</label>
            <input type="text" value="cognome">
            <label for="email">Email</label>
            <input type="email" value="email">
            <button type="submit">Update</button>
        </form>
    </div>
</div>
@endsection