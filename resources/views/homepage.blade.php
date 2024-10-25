@extends('components.template')
@section('title', 'Homepage')
@section('content')

    <div class="container mx-auto mt-32">
        <header class="mb-8">
            <h1 class="text-5xl font-extrabold text-gray-800">Dashboard</h1>
            <p class="text-lg text-gray-600 mt-2">Manage your data effectively and efficiently</p>
        </header>

        <div class="bg-gradient-to-r from-blue-500 to-blue-300 rounded-lg py-10 shadow-sm">
            <div class="text-center">
                <p class="text-4xl font-semibold text-white">Welcome</p>
                <p class="text-xl text-white mt-2">Choose the contacts you need with complete identity</p>
            </div>
        </div>

        <div class="mt-16 w-full mx-auto px-4 mb-12">
            {{-- Student Data Table --}}
            <div class="mb-10">
                <h2 class="text-3xl font-bold mb-4 text-center text-gray-800">Student Data</h2>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full leading-normal border border-gray-300">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-4 text-center">No.</th>
                                    <th class="py-3 px-4 text-left">Name</th>
                                    <th class="py-3 px-4 text-left">Email</th>
                                    <th class="py-3 px-4 text-left">Phone</th>
                                    <th class="py-3 px-4 text-left">City</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white text-gray-700">
                                @foreach ($users as $data)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-150">
                                        <td class="py-3 px-4 text-center">{{ $loop->iteration }}</td>
                                        <td class="py-3 px-4">{{ $data['name'] }}</td>
                                        <td class="py-3 px-4">{{ $data['email'] }}</td>
                                        <td class="py-3 px-4">{{ $data['phone'] }}</td>
                                        <td class="py-3 px-4">{{ $data['city'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Lecture Data Table --}}
            <div class="mb-10">
                <h2 class="text-3xl font-bold mb-4 text-center text-gray-800">Lecture Data</h2>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full leading-normal border border-gray-300">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-4 text-center">No.</th>
                                    <th class="py-3 px-4 text-left">Name</th>
                                    <th class="py-3 px-4 text-left">Email</th>
                                    <th class="py-3 px-4 text-left">Job Title</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white text-gray-700">
                                @foreach ($users as $data)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-150">
                                        <td class="py-3 px-4 text-center">{{ $loop->iteration }}</td>
                                        <td class="py-3 px-4">{{ $data['name'] }}</td>
                                        <td class="py-3 px-4">{{ $data['email'] }}</td>
                                        <td class="py-3 px-4">{{ $data['job'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Employee Data Table --}}
            <div>
                <h2 class="text-3xl font-bold mb-4 text-center text-gray-800">Employee Data</h2>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full leading-normal border border-gray-300">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-4 text-center">No.</th>
                                    <th class="py-3 px-4 text-left">Name</th>
                                    <th class="py-3 px-4 text-left">Email</th>
                                    <th class="py-3 px-4 text-left">Address</th>
                                    <th class="py-3 px-4 text-left">Postal Code</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white text-gray-700">
                                @foreach ($users as $data)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-150">
                                        <td class="py-3 px-4 text-center">{{ $loop->iteration }}</td>
                                        <td class="py-3 px-4">{{ $data['name'] }}</td>
                                        <td class="py-3 px-4">{{ $data['email'] }}</td>
                                        <td class="py-3 px-4">{{ $data['address'] }}</td>
                                        <td class="py-3 px-4">{{ $data['postcode'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
