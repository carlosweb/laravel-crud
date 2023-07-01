@extends('layouts.app')

@section('content')

    <h1 class=" text-4xl font-bold text-blue-600 my-3">Users</h1>

    <a class="btn--primary" href="{{ route('users.create') }}">Create new user</a>

    <ul class="flex flex-col mt-5 gap-3">
        @foreach ($users as $user )
            <li class="flex gap-3 items-center justify-between  bg-zinc-100 p-2 rounded-md shadow cursor-pointer hover:bg-slate-300 transition ease-in-out delay-75">
                <p class=" text-2xl">{{ $user->name }}</p>
                <div class="flex gap-3">
                    <a  href="{{ route('users.show', ['user' => $user->id]) }}">
                        <svg class="h-5 w-5 text-blue-950"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                          </svg>


                    </a>
                    <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                        <svg class="h-5 w-5 text-blue-950"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                          </svg>
                    </a>
                </div>
            </li>
        @endforeach
    </ul>

@endsection
