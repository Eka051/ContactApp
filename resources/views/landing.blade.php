@extends('components.template')
@section('title', 'Landing Page')
@section('body-class', 'bg-blue-100')
@section('content')

<section id="home" class="mx-auto lg:pl-36 bg-blue-100 bg-opacity-20 h-screen">
    <div class="container mt-3">
        <div class="flex">
            <div class="w-full items-center px-4 lg:w-1/2 pt-40 md:pt-64 lg:pt-64">
                <h1 class="text-6xl font-bold">Welcome to ContactApp<span class="block">With Laravel 11</span></h1>
                <p class="text-2xl mt-5">Find Contact You Need</p>
            </div>
            <!-- Image -->
            <div class="relative mt-32 justify-end w-3/4">
                <img src="{{ asset('img/contact.png') }}" alt="contact" class="flex-grow">
            </div>
        </div>
    </div>
 </section>


@endsection