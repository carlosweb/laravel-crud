@extends('layouts.app')

@section('content')
    <h1 class=" text-4xl font-bold text-blue-600 my-3">Edit</h1>

    @if(session()->has('message'))
        <h5 class="message--primary">{{ session()->get('message') }}</h5>
    @endif

    <form class="flex flex-col gap-3" action="{{ route('users.update',['user' => $user->id]) }}" method="post">
        @csrf

        <input  type="hidden" name="_method" value="PUT" />
        <input
            class="block w-200 rounded-md border-0  p-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            type="text"
            name="name"
            value="{{ $user->name }}"
        />
        <input
            class="block w-200 rounded-md border-0  p-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            type="text"
            name="email"
            value="{{ $user->email }}"
        />

        <div class="flex gap-3">
            <button class="btn--primary" type="submit">Send</button>
            <a class="btn--secondary" href="{{ route('users.index') }}">Go back</a>
        </div>

    </form>

    {{-- <ul>
        @foreach ($users as $user )
<li>{{ $user->name }} |
    <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
    <a href="" >Delete</a> </li>
        @endforeach
    </ul> --}}
@endsection
