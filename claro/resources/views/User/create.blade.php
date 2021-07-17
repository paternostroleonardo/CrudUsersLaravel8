@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- component -->
<div class="h-screen w-full flex overflow-hidden">
	<nav class="flex flex-col bg-indigo-500 w-64 px-12 pt-4 pb-6">
		<!-- SideNavBar -->

		<div class="flex flex-row border-b items-center justify-between pb-2">
			<!-- Hearder -->
			<span class="text-lg font-semibold capitalize text-gray-100">
				Dashboard
			</span>

			<span class="relative ">
				<a
					class="hover:text-yellow-400 text-white-100
					text-gray-100"
					href="inbox/">
					<svg
						width="24"
						height="24"
						viewBox="0 0 24 24"
						fill="none"
						stroke="currentColor"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round">
						<path
							d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
						<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
					</svg>
				</a>
				<div
					class="absolute w-2 h-2 rounded-full bg-yellow-400
					bg-yellow-400 right-0 mb-5 bottom-0"></div>
			</span>

		</div>

		<div class="mt-8">
			<!-- User info -->
			<img
				class="h-12 w-12 rounded-full object-cover"
				src="https://appzzang.me/data/editor/1608/f9c387cb6bd7a0b004f975cd92cbe2d9_1471626325_6802.png"
				alt="enoshima profile" />

			<span class="text-sm dark:text-gray-300">
				<span class="font-semibold text-yellow-400 text-gray-100">
					ID
				<p class="text-gray-100">
				{{ auth()->user()->identification }}
                </p>
		</div>

		<ul class="mt-2 text-gray-600">
			<!-- Links -->
			<li class="mt-8">
				<a href="#home" class="flex ">
					<svg
						class="fill-current h-5 w-5 text-yellow-400"
						viewBox="0 0 24 24">
						<path
							d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
							4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
							4h4v-4h-4M4 8h4V4H4v4z"></path>
					</svg>
					<span
						class="ml-2 capitalize font-medium text-gray-100
						text-gray-100">
						dashboard
					</span>
				</a>
			</li>

			<li class="mt-8">
				<a href="#home" class="flex">
					<svg
						class="fill-current h-5 w-5 text-yellow-400"
						viewBox="0 0 24 24">
						<path
							d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2
							2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0
							00-2-2h-1V1m-1 11h-5v5h5v-5z"></path>
					</svg>
					<span
						class="ml-2 capitalize font-medium text-gray-100
						text-gray-100">
						Email
					</span>
				</a>
			</li>

			<li
				class="mt-8 shadow py-2 bg-white hover:bg-yellow-400 hover:text-gray-100 bg-gray-100 rounded-lg
				-ml-4">
				<a href="#home" class="flex pl-4">
					<svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
						<path
							d="M12 4a4 4 0 014 4 4 4 0 01-4 4 4 4 0 01-4-4 4 4 0
							014-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4
							8-4z"></path>
					</svg>
					<span class="ml-2 capitalize font-medium">Profile</span>
				</a>
			</li>

		</ul>

		<div class="mt-auto flex items-center text-yellow-400 text-yellow-400">
			<!-- important action -->
			<a href="#home" class="flex items-center">
				<svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
					<path
						d="M16 17v-3H9v-4h7V7l5 5-5 5M14 2a2 2 0 012
						2v2h-2V4H5v16h9v-2h2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2
						0 012-2h9z"></path>
				</svg>
				<a href="{{ route('login.destroy') }}" class="ml-2 capitalize font-medium">log out</a>
			</a>

		</div>
	</nav>
     <!-- start form -->
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <!-- component -->
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <form action="{{ action('App\Http\Controllers\UserController@store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Name
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" placeholder="Name" id="name" name="name">
        @error('name')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
          Email
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" placeholder="Email" id="email" name="email">
        @error('email')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
    </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
          Identification
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" placeholder="Identification" id="identification" name="identification">
        @error('identification')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
    </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
          Phone
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"  placeholder="Phone" id="phone" name="phone">
        @error('phone')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
    </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Password
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" placeholder="********" id="password" name="password">
        @error('password')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> {{ $message }}</p>
        @enderror
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Password Confirmation
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" placeholder="confirmation" id="password_confirmation" name="password_confirmation">
      </div>
    </div>
    <div class="-mx-3 md:flex mb-2">
        <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
              Department
            </label>
            <div class="relative">
              <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"  name="namedpto" value="id">
                @foreach ($Departments as $department)
               <option value="{{ $department->namedpto }}">{{ $department->namedpto }}</option>
              @endforeach
              </select>
              <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div>
          </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
          City
        </label>
        <div class="relative">
          <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" name="namecity" value="id">
            @foreach ($Cities as $city)
            <option value="{{ $city->namecity }}">{{ $city->namecity }}</option>
           @endforeach
          </select>
          <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>
        </div>
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
            Birth Date
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" placeholder="birth_date" id="birth_date" name="birth_date" type="datetime-local" value="birth_date">
      </div>
    </div>
    <button type="submit" class="mt-12 rounded-md bg-indigo-500 text-lg text-white font-semibold p-2 my-2 hover:bg-indigo-600"> Save </button>
</form>
</div>
</div>
</div>
@endsection
