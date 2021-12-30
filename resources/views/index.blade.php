@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">
                Wiktor <span class="text-yellow-300"> Samsel-Baudat</span></h2>
                <h3 class="text-2xl sm:text-5xl"> First Laravel Project </h3>
                <h4 class="text-2xl sm:text-4xl"> Basic html,tailwind css and php used </h4>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll down</p>
        </div>

    </section>
    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Lorem, ipsum.</h3>
            <h4 class="text-xl mb-3 text-gray-200">Lorem, ipsum dolor.</h4>
            <p class="mb-6">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero ad quos eveniet, culpa nihil iste alias in illo quam deleniti impedit adipisci magnam soluta ut sunt doloremque eum commodi eaque aut animi quisquam dicta illum! Praesentium cumque atque quae qui sapiente perferendis, tenetur repudiandae provident veniam dolorem, magnam deserunt ipsam!
            </p>
            <a href="{{ route('about')}}" class="bg-color-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">About page</a>
        </div>
    </section>
    
    <section class='py-20'>
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Lorem ipsum dolor sit</h3>
            <div class="flex flex-wrap -mx2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">github</h3>
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laborum alias voluptate quibusdam dolor deserunt voluptates sequi incidunt et quaerat.
                        </p>
                        <a href="{{ url('https://github.com/wsamselbaudat') }}"class="bg-color-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">github</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">github</h3>
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laborum alias voluptate quibusdam dolor deserunt voluptates sequi incidunt et quaerat.
                        </p>
                        <a href="{{ url('https://github.com/wsamselbaudat') }}"class="bg-color-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">github</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection