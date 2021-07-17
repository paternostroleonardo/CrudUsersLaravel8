@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
    <div class="md:flex w-full">
    <div class="hidden md:block w-1/2 bg-indigo-500">
        <img src="https://claroinsurance.com/wp-content/uploads/2020/07/Hero-about-us.jpg"/>
    </div>
    <div class="w-full md:w-1/2 py-24 px-10 md:px-10">
        <div class="text-center mb-10">
            <h1 class="font-bold text-4xl text-indigo-500">Login</h1>
        </div>
    <form class="mt-4" method="POST" action="">
     @csrf
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">
        @error('email')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">
        @error('password')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"> Enviar </button>

    </form>
    </div>
    </div>
    </div>
@endsection
