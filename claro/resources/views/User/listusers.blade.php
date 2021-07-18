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
			<h2
				class="mt-4 text-xl text-yellow-400 font-extrabold capitalize">
				Hello <b class="text-gray-100">{{ auth()->user()->name }}</b>
			</h2>
			<span class="text-sm dark:text-gray-300">
				<span class="font-semibold text-yellow-400 text-gray-100">
					ID
				<p class="text-gray-100">
				{{ auth()->user()->identification }}
                </p>
		</div>

        <a href="{{ url('/listusers/create') }}">
        <button
			class="mt-8 flex items-center justify-between py-3 px-4 text-white
			text-gray-100 bg-yellow-400 dark:bg-green-500 rounded-lg shadow">
			<!-- Action -->

			<span>Add user</span>
			<svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
				<path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
			</svg>
		</button>
        </a>

		<ul class="mt-2 text-gray-600">
			<!-- Links -->
			<li class="mt-8">
				<a href="{{ url('/listusers') }}" class="flex inline-block"><svg
						class="fill-current h-5 w-5 text-yellow-400"
						viewBox="0 0 24 24">
						<path
							d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
							4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
							4h4v-4h-4M4 8h4V4H4v4z"></path>
					</svg>
					<span
						class="ml-3 capitalize font-medium text-gray-100
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
                    <a href="{{ url('/listusers/'.auth()->user()->id) }}" class="flex inline-block">
					<svg class="fill-current h-7 w-5 ml-2" viewBox="0 0 24 24">
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
	<main
		class="flex-1 flex flex-col bg-gray-100 dark:bg-gray-700 transition
		duration-500 ease-in-out overflow-y-auto">
		<div class="mx-10 my-2">
			<nav
				class="flex flex-row justify-between border-b
				dark:border-gray-600 dark:text-gray-400 transition duration-500
				ease-in-out">
				<div class="flex">
					<!-- Top NavBar -->

					<a
						href="users-dashboard/"
						class="py-2 block text-yellow-400 border-yellow-400
						dark:text-green-200 dark:border-green-200
						focus:outline-none border-b-2 font-medium capitalize
						transition duration-500 ease-in-out">
						users
					</a>
				</div>

				<div class="flex items-center select-none">
					<span
						class="text-indigo-500 hover:text-green-500 dark-hover:text-green-300
						cursor-pointer mr-3 transition duration-500 ease-in-out">

						<svg viewBox="0 0 512 512" class="h-5 w-5 fill-current">
							<path
								d="M505 442.7L405.3
								343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
								44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1
								208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4
								2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9
								0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7
								0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0
								128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
						</svg>
					</span>

					<input
						class="w-24 bg-transparent focus:outline-none"
						placeholder="Search" />

				</div>

			</nav>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 w-full">
                            <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-indigo-500 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-200 text-left text-xs font-medium uppercase tracking-wider">
                                     Email
                                </th>
                                <th scope="col" class="px-6 py-3 bg-indigo-500 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Identification
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-200 text-left text-xs font-medium uppercase tracking-wider">
                                    Phone
                                </th>
                                <th scope="col" class="px-6 py-3 bg-indigo-500 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Age
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-200 text-left text-xs font-medium uppercase tracking-wider">
                                    City
                                </th>
                                <th scope="col" class="px-6 py-3 bg-indigo-500 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Department
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-200 text-left text-xs font-medium uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)

                                <tr>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->name }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-500">
                                        {{ $user->email }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->identification }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->phone }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->id }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->namecity }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->namedpto }}
                                    </td>

                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-yellow-400 hover:scale-110">
                                                <a href="{{ url('/listusers/'.$user->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                </a>
                                            </div>
                                            <div class="w-4 mr-2 transform text-indigo-500 hover:text-yellow-400 hover:scale-110">
                                                <a href="{{ url('/listusers/'.$user->id.'/edit') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                                </a>
                                            </div>
                                            <div class="w-4 mr-2 transform text-yellow-400 hover:text-indigo-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                           	</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
