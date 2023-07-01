@extends('layouts.app')

@section('content')
<h1 class=" text-4xl font-bold text-blue-600 my-3">show</h1>

<div class="bg-blue-100 rounded-md p-3 mb-3 shadow-md">
    <h2 class="text-3xl text-blue-950 flex flex-col">
        <span class="text-zinc-400 text-lg">User</span>
        {{ $user->name }}
    </h2>
    <h2 class="text-2xl text-blue-950 flex flex-col">
        <span class="text-zinc-400 text-lg">Email</span>
        {{ $user->email }}
    </h2>
</div>

<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
@csrf

<input type="hidden" name="_method" value="DELETE"/>
<div class="flex gap-3">
    <button class="btn--primary" type="submit">Delete</button>
    <a class="btn--secondary" href="{{ route('users.index') }}">Go back</a>
</div>
</form>

@endsection
