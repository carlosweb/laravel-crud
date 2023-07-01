@extends('layouts.app')


@section('content')
    <h1 class=" text-4xl font-bold text-blue-600 my-3">Create</h1>


    @if(session()->has('message'))
        <h5 class="message--primary">{{ session()->get('message') }}</h5>
    @endif

    <form class="flex flex-col gap-3" action="{{ route('users.store') }}" method="post">
        @csrf

        <input
            class="block w-200 rounded-md border-0  p-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            type="text"
            name="name"
            placeholder="Your name"
        />
        <input
            class="block w-200 rounded-md border-0  p-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            type="text"
            name="email"
            placeholder="Your email"
        />
        <input
            class="block w-200 rounded-md border-0  p-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            type="text"
            name="password"
            placeholder="Type your password"
        />

        <div class="flex gap-3">
            <button class="btn--primary" type="submit">Create</button>
            <a class="btn--secondary" href="{{ route('users.index') }}">Go back</a>
        </div>

    </form>


@endsection


