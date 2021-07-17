@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
    <div class="md:flex w-full">
    <div class="hidden md:block w-1/2 bg-indigo-500">
        <img src="https://claroinsurance.com/wp-content/uploads/2020/07/Hero.jpg"/>
    </div>
    <div class="w-full md:w-1/2 py-6 px-5 md:px-10">
        <div class="text-center mb-10">
            <h1 class="font-bold text-3xl text-gray-900">REGISTER</h1>
            <p>Enter your information to register</p>
        </div>
    <form method="POST" action="">
     @csrf
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name" id="name" name="name">
        @error('name')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">
        @error('email')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">
        @error('password')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password Confirmation" id="password_confirmation" name="password_confirmation">
        <input type="identification" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Identification" id="identification" name="identification">
        @error('identification')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
        <input type="phone" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Phone" id="phone" name="phone">
        @error('phone')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
        <input class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="birth_date" id="birth_date" name="birth_date" type="datetime-local" value="birth_date">
        @error('birth_date')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
        <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-900 text-light font-semibold">Departament</label>
            <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="namedpto" value="id">
              @foreach ($Departments as $department)
               <option value="{{ $department->namedpto }}">{{ $department->namedpto }}</option>
              @endforeach
            </select>
          </div>
          <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-900 text-light font-semibold">City</label>
            <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="namecity" value="id">
                @foreach ($Cities as $city)
                <option value="{{ $city->namecity }}">{{ $city->namecity }}</option>
               @endforeach
            </select>
          </div>
        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"> Sent </button>
    </form>
    </div>
    </div>
    </div>
@endsection


